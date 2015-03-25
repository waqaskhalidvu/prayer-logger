
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <title>Prayer Logger Registration form</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- CSS -->
       <!--  {{HTML::style('css/demo.css')}}
        {{HTML::style('css/style.css')}}
    {{HTML::style('css/animate-custom.css')}} -->

        
        {{HTML::style('assets/bootstrap/css/bootstrap.min.css')}}
        {{HTML::style('assets/css/style.css')}}
        
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

    </head>

    <body>

        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="logo span4">
                        <h1><a href="">Prayer Logger <span class="red">.</span></a></h1>
                    </div>
                   
                </div>
            </div>
        </div>

        <div class="register-container container">
            <div class="row">
                <div class="iphone span5">
                    <img src="assets/img/iphone.png" alt="">
                </div>
                <div class="register span6">
     
     @yield('content')   
        

       </div>
            </div>
      <div>
        
      </div>
        </div>

        <!-- Javascript -->
        {{ HTML::script('assets/js/jquery-1.8.2.min.js') }}
        {{ HTML::script('assets/bootstrap/js/bootstrap.min.js') }}
        {{ HTML::script('assets/js/jquery.backstretch.min.js') }}
        {{ HTML::script('assets/js/scripts.js') }}


    </body>

</html>

