<?php
require 'assets/PrayTime.php';

class PrayerlogsController extends \BaseController {

	/**
	 * Display a listing of prayerlogs
	 *
	 * @return Response
	 */

	public function index()
	{	
		$id = Auth::id();
    	$date_first_record = Prayerlog::where('user_id', $id)->select('prayer_date')->first();
    	
        $diff = date_diff(new DateTime(date('Y-m-d')), new DateTime($date_first_record['prayer_date']));
        $start= (int) $diff->format("%R%a");
     
        
        if(!Input::get('page')) {
            $prayerlogs = Prayerlog::where('user_id', $id)->paginate(10);
            Paginator::setCurrentPage($prayerlogs->getLastPage());
        }

        if(Input::get('search')){
			$search = Input::get('search');
			$diff = date_diff(new DateTime($date_first_record['prayer_date']), new DateTime($search));
        	$page= (int) $diff->format("%R%a")+1;
        	if($page%2==0){
        		$page= $page/2;
        	}
        	else{
        		$page=  $page/2+1;
        	}
			$prayerlogs = Prayerlog::where('user_id', $id)->paginate(10);
            Paginator::setCurrentPage((int)$page);
		}

        $prayerlogs = Prayerlog::where('user_id', $id)->paginate(10);
        //return $prayerlogs->getLastPage();
		return View::make('prayerlogs.index', compact('prayerlogs', 'start'));
	}

	/**
	 * Show the form for creating a new prayerlog
	 *
	 * @return Response
	 */
	public function create()
	{
		
		return View::make('prayerlogs.create');
	}

	/**
	 * Store a newly created prayerlog in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$id = Auth::id(); 		
		$data = Input::all();
		$day= $data['day'];
		$month= $data['month'];
		$year= $data['year'];
		$lati= $data['lati'];
		$longi= $data['longi'];
		$timezone= $data['timezone'];
		$hour= $data['hour'];
		$minutes= $data['minutes'];

		
		/*--------------up comming prayer find-----------------*/
		
    	
			$prayTime = new PrayerTime();
			$times = $prayTime->getDatePrayerTimes ($year, $month, $day, $lati, $longi, $timezone);

			
			$fajr = $times[0];
			$zuhar = $times[2];
			$asr = $times[3];
			$maghrib = $times[5];
			$ishaa = $times[6];
		/*-----------------------------prayer times in munites-----------------------*/
			$time_minutes = (int) $hour* 60 + (int) $minutes;

			$fajr_time_dif = (int)substr($fajr, 0,2)*60 + (int)substr($fajr, 3,5) - $time_minutes;
			$zuhar_time_dif = (int)substr($zuhar, 0,2)*60 + (int)substr($zuhar, 3,5) - $time_minutes;
			$asr_time_dif = (int)substr($asr, 0,2)*60 + (int)substr($asr, 3,5) - $time_minutes;
			$maghrib_time_dif = (int)substr($maghrib, 0,2)*60 + (int)substr($maghrib, 3,5) - $time_minutes;
			$ishaa_time_dif = (int)substr($ishaa, 0,2)*60 + (int)substr($ishaa, 3,5) - $time_minutes;
			

			$pray_time_dif = [$fajr_time_dif, $zuhar_time_dif, $asr_time_dif, $maghrib_time_dif, $ishaa_time_dif];
			
			$date="{$year}-{$month}-{$day}";
			$new_prayer_date = new DateTime($date);


			$c;
			for($c=0; $c<5; $c++){
				if($pray_time_dif[$c] >  0){
					break;
				}
				if($c == 4){
					$day++;
					$date="{$year}-{$month}-{$day}";
					$new_prayer_date = new DateTime($date);
				}
			}

    	/*--------------up comming prayer find-----------------*/
		

	
			$last_record = Prayerlog::where('user_id', $id)->orderBy('prayer_date', 'desc')->first();

			$last_prayer_date = new DateTime($last_record['prayer_date']);
			$last_prayer_name = $last_record['prayer_name'];

			
		    
			
			switch ($c) {
		    case 0:
		        $new_prayer_name = 'Fajr' ;
		        break;
		    case 1:
		        $new_prayer_name = 'Zuhar' ;
		        break;
		    case 2:
		        $new_prayer_name = 'Asr' ;
		        break;
 			case 3:
		        $new_prayer_name = 'Mughrab' ;
		        break;
		    case 4:
		        $new_prayer_name = 'Ishaa' ;
		        break;
		    case 5:
		    	$new_prayer_name = 'Fajr' ;
		    	break;
 			}



			$diff= date_diff($last_prayer_date, $new_prayer_date);
			$diff= (int) $diff->format("%R%a");
			$count = $diff;
			
			$prayer_name = ['Fajr', 'Zuhar', 'Asr', 'Mughrab', 'Ishaa'];

			for($i= 0; $i <= $diff; $i++){

				for($j= 0; $j < 5; $j++){
					if($prayer_name[$j] != $last_prayer_name || $count != $diff ){

						if($prayer_name[$j] != $new_prayer_name || $count != 0){
							Prayerlog::firstOrCreate(array('prayer_name' => $prayer_name[$j], 'prayer_date' => $last_prayer_date, 'user_id' => $id));
						}
						else{
							break;
						}
					}
									
				}
				
				$count--;
				$last_prayer_date->add(new DateInterval('P1D'));
			}
			/*delete extra records*/
			$c = 5 - $c;
			for($i= 0; $i > $diff*5-$c; $i--){
    			$d_rec = Prayerlog::where('user_id', $id)->select('id', 'logged')->orderBy('id', 'desc')->first();
				if($d_rec['logged'] == 'logged'){
					break;
				}
				else{
					Prayerlog::destroy($d_rec['id']);
				}
			}


		return Redirect::route('prayerlogs.index');
	}

	/**
	 * Display the specified prayerlog.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$prayerlog = Prayerlog::findOrFail($id);

		return View::make('prayerlogs.show', compact('prayerlog'));
	}

	/**
	 * Show the form for editing the specified prayerlog.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        Session::put('pre_url', URL::previous());
		$prayerlog = Prayerlog::find($id);

		return View::make('prayerlogs.edit', compact('prayerlog'));
	}

	/**
	 * Update the specified prayerlog in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	
	public function update($id)
	{
		$prayerlog = Prayerlog::findOrFail($id);

		$data = Input::all();
        $log;
		$log_mosque;


		$offered = $data['offered'];

		
		if($data["offered"] == "Offer"){
			$logged = "logged";
			$offered = $data["offered"];
			$prayer_type = $data["prayer_type"];
			$offered_time = date('H:i:s', strtotime(str_replace('-', '/', $data["offered_time"])));
			$offer_at = $data["offer_at"];

			$log = ['offered'=> $offered, 'prayer_type'=> $prayer_type, 'offered_time'=> $offered_time];

            if($prayer_type == 'Qaza'){
                $prayerlog->offered_date = date(str_replace('/', '-', $data["offered_date"]));
            }
            $prayerlog->logged = 'logged';


			if($offer_at == "Mosque"){
				$mosque_name = $data["mosque_name"];
				$country = $data["country"];
				$state = $data["state"];
				$city = $data["city"];
				$street = $data['street'];
				$mosque = ['mosque_name'=> $mosque_name, 'country'=> $country, 'state'=> $state, 'city'=> $city, 'street'=>$street];
				$log_mosque = Mosque::firstOrCreate($mosque);
				$log['mosque_id'] = $log_mosque->id;
				$prayerlog->update($mosque);
			}


			}
			else{
				$offered = $data["offered"];
				$log = ["offered" => $offered];
				$prayerlog->logged = 'logged';
				}
				

		
		
		
		$validator = Validator::make($data = Input::all(), Prayerlog::$rules);

		if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }

		$prayerlog->update($log);

        if ( Session::has('pre_url') )
        {
            $url = Session::get('pre_url');
            Session::forget('pre_url');
            return Redirect::to($url);
        }
        else
            return Redirect::route('prayerlogs.index');


	}

	/**
	 * Remove the specified prayerlog from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Prayerlog::destroy($id);

		return Redirect::route('prayerlogs.index');
	}



}
