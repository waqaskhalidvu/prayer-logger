
@extends('layouts.main')


@section('csslinks')

<!-- bootstrap -->
    
    
    <!-- RTL support - for demo only -->
    <script src="js/demo-rtl.js"></script>
    <!-- 
    If you need RTL support just include here RTL CSS file <link rel="stylesheet" type="text/css" href="css/libs/bootstrap-rtl.min.css" />
    And add "rtl" class to <body> element - e.g. <body class="rtl"> 
    -->
    
    <!-- libraries -->
    {{HTML::style('css/libs/font-awesome.css')}}
    {{HTML::style('css/libs/nanoscroller.css')}}
    {{HTML::style('css/compiled/theme_styles.css')}}
    {{HTML::style('css/libs/dataTables.fixedHeader.css')}}
    {{HTML::style('css/libs/dataTables.tableTools.css')}}
    
    <!-- Favicon -->
    <link type="image/x-icon" href="favicon.png" rel="shortcut icon"/>

    <!-- google font libraries -->
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,700,300|Titillium+Web:200,300,400' rel='stylesheet' type='text/css'>


@stop

@section('logo')
<a class="navbar-brand" href="homes" style="margin-left:100px">{{ HTML::image('images/logo.png') }}</a>
@stop

@section('tablinks')

<li><a href="homes">Home</a></li>
<li class="active"><a href="/locationfind">Prayer Book</a></li>
<li><a href="prayers">Prayer Timing</a></li>
<li><a href="mosques">Mosque Finding</a></li>
<li><a href="qiblahdirections">Qiblah Direction</a></li>
<li><a href="settings">Settings</a></li>

@stop


@section('content')


    
        <header class="navbar" id="header-navbar" >
            <div class="container" >
                
                
                <div class="clearfix" >
                    
                    

                    
                    <div class="nav-no-collapse pull-right" id="header-nav" >
                        <ul class="nav navbar-nav pull-right" >
                            
                            <li class="dropdown hidden-xs">
                                <a class="btn dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-warning"></i>
                                    <span class="count">8</span>
                                </a>
                                <ul class="dropdown-menu notifications-list">
                                    <li class="pointer">
                                        <div class="pointer-inner">
                                            <div class="arrow"></div>
                                        </div>
                                    </li>
                                    <li class="item-header">You have 6 new notifications</li>
                                    <li class="item">
                                        <a href="#">
                                            <i class="fa fa-comment"></i>
                                            <span class="content">New comment on ‘Awesome P...</span>
                                            <span class="time"><i class="fa fa-clock-o"></i>13 min.</span>
                                        </a>
                                    </li>
                                    <li class="item">
                                        <a href="#">
                                            <i class="fa fa-plus"></i>
                                            <span class="content">New user registration</span>
                                            <span class="time"><i class="fa fa-clock-o"></i>13 min.</span>
                                        </a>
                                    </li>
                                    <li class="item">
                                        <a href="#">
                                            <i class="fa fa-envelope"></i>
                                            <span class="content">New Message from George</span>
                                            <span class="time"><i class="fa fa-clock-o"></i>13 min.</span>
                                        </a>
                                    </li>
                                    <li class="item">
                                        <a href="#">
                                            <i class="fa fa-shopping-cart"></i>
                                            <span class="content">New purchase</span>
                                            <span class="time"><i class="fa fa-clock-o"></i>13 min.</span>
                                        </a>
                                    </li>
                                    <li class="item">
                                        <a href="#">
                                            <i class="fa fa-eye"></i>
                                            <span class="content">New order</span>
                                            <span class="time"><i class="fa fa-clock-o"></i>13 min.</span>
                                        </a>
                                    </li>
                                    <li class="item-footer">
                                        <a href="#">
                                            View all notifications
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown hidden-xs">
                                <a class="btn dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-envelope-o"></i>
                                    <span class="count">16</span>
                                </a>
                                <ul class="dropdown-menu notifications-list messages-list">
                                    <li class="pointer">
                                        <div class="pointer-inner">
                                            <div class="arrow"></div>
                                        </div>
                                    </li>
                                    <li class="item first-item">
                                        <a href="#">
                                            <img src="img/samples/messages-photo-1.png" alt=""/>
                                            <span class="content">
                                                <span class="content-headline">
                                                    George Clooney
                                                </span>
                                                <span class="content-text">
                                                    Look, just because I don't be givin' no man a foot massage don't make it 
                                                    right for Marsellus to throw...
                                                </span>
                                            </span>
                                            <span class="time"><i class="fa fa-clock-o"></i>13 min.</span>
                                        </a>
                                    </li>
                                    <li class="item">
                                        <a href="#">
                                            <img src="img/samples/messages-photo-2.png" alt=""/>
                                            <span class="content">
                                                <span class="content-headline">
                                                    Emma Watson
                                                </span>
                                                <span class="content-text">
                                                    Look, just because I don't be givin' no man a foot massage don't make it 
                                                    right for Marsellus to throw...
                                                </span>
                                            </span>
                                            <span class="time"><i class="fa fa-clock-o"></i>13 min.</span>
                                        </a>
                                    </li>
                                    <li class="item">
                                        <a href="#">
                                            <img src="img/samples/messages-photo-3.png" alt=""/>
                                            <span class="content">
                                                <span class="content-headline">
                                                    Robert Downey Jr.
                                                </span>
                                                <span class="content-text">
                                                    Look, just because I don't be givin' no man a foot massage don't make it 
                                                    right for Marsellus to throw...
                                                </span>
                                            </span>
                                            <span class="time"><i class="fa fa-clock-o"></i>13 min.</span>
                                        </a>
                                    </li>
                                    <li class="item-footer">
                                        <a href="#">
                                            View all messages
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            
                            
                            
                        </ul>
                    </div>
                </div>
            </div>
        </header>

        <div id="page-wrapper" class="container" >
            <div class="row" >
            
                <div id="content-wrapper" style="margin-left: 0px">
                    <div class="row">
                        <div class="col-lg-12">
                            
                            
                                    <ol class="breadcrumb">
                                        <li><a href="#">Home</a></li>
                                        
                                    </ol>
                                    
                                    <h1>Prayers Information</h1>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="main-box clearfix">
                                        
                                       <div class="main-box-body clearfix">
                                       
                                            <div class="table-responsive">
                                               
                                               
                                                <table id="table-example" class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>Date</th>
                                                            <th>Prayer Name</th>
                                                            <th>Status</th>
                                                            <th>Prayer Information</th>
                                                            

                                                            
                                                                                                                        
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        

                                                           
                                                            @foreach ($prayerlogs as $prayerlog)
                                                            <tr>
                                                                <td> {{$prayerlog->prayer_date}} </td>
                                                                <td> {{$prayerlog->prayer_name}} </td>
                                                                
                                                                @if($prayerlog->logged == 'logged')
                                                                    
                                                                        <td> {{$prayerlog->offered}}</td>
                                                                        <td> 
                                                                            {{ link_to_route('prayerlogs.show', 'View', [$prayerlog->id], ['class="btn btn-sm btn-success"'])}}
                                                                            {{ link_to_route('prayerlogs.edit', 'Edit', [$prayerlog->id], ['class="btn btn-sm btn-danger"'])}}
                                                                         
                                                                        </td></tr>
                                                                
                                                                   
                                                                  

                                                                
                                                           
                                                                @else

                                                                    <th> {{$prayerlog->logged}} </th>
                                                                    <td>
                                                                    {{ link_to_route('prayerlogs.edit', 'Enter', [$prayerlog->id], ['class="btn btn-sm btn-success"'])}}
                                                                    </td></tr> 
                                                            
                                                                 @endif 


                                                            @endforeach
                                                            
                                                            
                                                            



                                                           
                                                        
                                                        
                                                    </tbody>
                                                </table>
                                                {{ $prayerlogs->links();}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                        </div>
                    </div>
                    
                    
                </div>
            </div>




@stop

@section('jslinks')

<!-- global scripts -->
    <script src="js/demo-skin-changer.js"></script> <!-- only for demo -->
    
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.nanoscroller.min.js"></script>
    
    <script src="js/demo.js"></script> <!-- only for demo -->
    
    <!-- this page specific scripts -->
    <script src="js/jquery.dataTables.js"></script>
    <script src="js/dataTables.fixedHeader.js"></script>
    <script src="js/dataTables.tableTools.js"></script>
    <script src="js/jquery.dataTables.bootstrap.js"></script>
    
    <!-- theme scripts -->
    <script src="js/scripts.js"></script>
    <script src="js/pace.min.js"></script>
    
    <!-- this page specific inline scripts -->
    <script>
    $(document).ready(function() {
        var table = $('#table-example').dataTable({
            'info': false,
            
            
        });
        
        //var tt = new $.fn.dataTable.TableTools( table );
        //$( tt.fnContainer() ).insertBefore('div.dataTables_wrapper');
        
        var tableFixed = $('#table-example-fixed').dataTable({
            'info': false,
            'pageLength': 50
        });
        
        new $.fn.dataTable.FixedHeader( tableFixed );
    });
    </script>





@stop