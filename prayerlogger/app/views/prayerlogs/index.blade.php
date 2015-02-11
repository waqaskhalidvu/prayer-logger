@extends('layouts.main')


@section('csslinks')
<link href="css/mainDiv.css" rel="stylesheet">
<link href="css/table.css" rel="stylesheet" type="text/css"/>
<link href="css/button.css" rel="stylesheet" type="text/css"/>
@stop

@section('tablinks')

<li><a href="homes">Home</a></li>
<li class="active"><a href="prayerlogs">Prayer Book</a></li>
<li><a href="prayers">Prayer Timing</a></li>
<li><a href="mosques">Mosque Finding</a></li>
<li><a href="qiblahdirections">Qiblah Direction</a></li>
<li><a href="settings">Settings</a></li>

@stop


@section('content')

<section>

     <div class="container" style="width: 90%">

<div>
<div id="carousel-slider" class="carousel slide" data-interval="false">
    <!--small list -->

    
    <!--small list closed -->
<div class="carousel-inner">
<div class="item active">
    <div class="myhead" style="background-color: darkcyan">
            <h1 style="color: white">&nbsp;&nbsp;&nbsp;&nbsp; Log Prayers</h1>
    </div>
    <div class="div">
            <table >
                <thead>
                    <tr>
                        <th></th>
                        <th >Fajr</th>
                        <th>Zuhar</th>
                        <th>Asr</th>
                        <th>Maghrib</th>
                        <th>Ishaa</th>
                        <th>Jumma</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>28-Nov-14</td>
                        <td> <img  src="images/cross.jpg" style="width:25%; "></td>
                        <td><img src="images/check.jpg" style="width:25%;"></td>
                        <td><img src="images/check.jpg" style="width:25%;"></td>
                        <td><img src="images/check.jpg" style="width:25%;"></td>
                        <td><img src="images/cross.jpg" style="width:25%;"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>29-Nov-14</td>
                        <td><img src="images/check.jpg" style="width:25%;"></td>
                        <td>
                            <input type="button" value="&check; Offered" class="myButton"> &NonBreakingSpace;
                            <input type="button" value="&chi; Missed" class="myButton">
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>30-Nov-14</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1-Dec-14</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>01-Dec-14</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>02-Dec-14</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>03-Dec-14</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
             
                    
                    
                </tbody>
            </table>
        </div>
</div>
<div class="item">

    
    <div class="myhead" style="background-color: darkcyan">
            <h1 style="color: white">&nbsp;&nbsp;&nbsp;&nbsp; Log Prayers</h1>
        </div>
        
        <div class="div">
            <table >
                <thead>
                    <tr>
                        <th></th>
                        <th>Fajr</th>
                        <th>Zuhar</th>
                        <th>Asr</th>
                        <th>Maghrib</th>
                        <th>Ishaa</th>
                        <th>Jumma</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>28-Nov-14</td>
                        <td> <img src="images/cross.jpg" style="width:25%;"></td>
                        <td><img src="images/check.jpg" style="width:25%;"></td>
                        <td><img src="images/check.jpg" style="width:25%;"></td>
                        <td><img src="images/check.jpg" style="width:25%;"></td>
                        <td><img src="images/cross.jpg" style="width:25%;"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>29-Nov-14</td>
                        <td><img src="images/check.jpg" style="width:25%;"></td>
                        <td>
                            <input type="button" value="&check; Offered" class="myButton"> &NonBreakingSpace;
                            <input type="button" value="&chi; Missed" class="myButton">
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>30-Nov-14</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1-Dec-14</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>01-Dec-14</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>02-Dec-14</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>03-Dec-14</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
             
                    
                    
                </tbody>
            </table>
        </div>
    
    

</div>

</div>
<a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
<i class="fa fa-angle-left"></i>
</a>
<a class="right carousel-control hidden-xs"href="#carousel-slider" data-slide="next">
<i class="fa fa-angle-right"></i>
</a>
</div>
</div>

</div>

</section>
@stop