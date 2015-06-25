
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
    {{HTML::style('css/searchField.css')}}
    
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
            <div class="container">
   
    <div class="row">
        <div class="col-md-4 col-md-offset-8">
            <form action="" class="search-form">
                <div class="form-group has-feedback">
                    <label for="search" class="sr-only">Search</label>
                    <input type="text" class="form-control" name="search" id="search" placeholder="search">
                    <span class="glyphicon glyphicon-search form-control-feedback"></span>
                </div>
            </form>
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
                                               
                                               
                                                <table class="table table-hover">
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

                                                                    @if($prayerlog->offered == 'Unoffer')
                                                                        <td> {{$prayerlog->offered}}</td>
                                                                        <td>
                                                                            {{ link_to_route('prayerlogs.edit', 'Edit', [$prayerlog->id], ['class="btn btn-sm btn-success"'])}}

                                                                        </td></tr>
                                                                    @else
                                                                    
                                                                        <td> {{$prayerlog->offered}}</td>
                                                                        <td> 
                                                                            {{ link_to_route('prayerlogs.show', 'View', [$prayerlog->id], ['class="btn btn-sm btn-success"'])}}
                                                                            {{ link_to_route('prayerlogs.edit', 'Edit', [$prayerlog->id], ['class="btn btn-sm btn-success"'])}}
                                                                         
                                                                        </td></tr>

                                                                    @endif


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