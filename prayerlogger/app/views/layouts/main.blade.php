<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>Prayer Logger</title>

{{HTML::style('css/bootstrap.min.css')}}
{{HTML::style('css/font-awesome.min.css')}}
{{HTML::style('css/prettyPhoto.css')}}
{{HTML::style('css/animate.min.css')}}
{{HTML::style('css/main.css')}}
{{HTML::style('css/responsive.css')}}


@yield('csslinks')

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->
<link rel="shortcut icon" href="images/ico/favicon.ico">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head>
<body >
<header id="header">
<div class="top-bar">
<div class="container">
<div class="row">
<div class="col-sm-6 col-xs-4">
<div class="top-number"><p><i class="fa fa-phone-square"></i> +0123 456 70 90</p></div>
</div>
<div class="col-sm-6 col-xs-8">
<div class="social">
<ul class="social-share">
<li><a href="#"><i class="fa fa-facebook"></i></a></li>
<li><a href="#"><i class="fa fa-twitter"></i></a></li>
<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
<li><a href="#"><i class="fa fa-skype"></i></a></li>
</ul>
<div class="search">
<form role="form">
<input type="text" class="search-form" autocomplete="off" placeholder="Search">
<i class="fa fa-search"></i>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
<nav class="navbar navbar-inverse" role="banner">
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="homes">{{ HTML::image('images/logo.png') }}</a>
</div>
<div class="collapse navbar-collapse navbar-right">
<ul class="nav navbar-nav">

@yield('tablinks')

</ul>
</div>
</div>
</nav>
</header>



<!--change -->


@yield('content')



<!--change div -->



<footer id="footer" class="midnight-blue" style='height:75px' >
<div class="container">

<div class="col-lg-12">
<ul class="pull-right">
<li><a href="homes">Home</a></li>
<li><a href="prayerlogs">Prayer Book</a></li>
<li><a href="prayers">Prayer Timing</a></li>
<li><a href="mosques">Mosque Finding</a></li>
<li><a href="qiblahdirections">Qiblah Direction</a></li>
<li><a href="settings">Settings</a></li>

</ul>


<div class="col-lg-5">
&copy; 2015 Prayer Logger.All Rights Reserved.
</div>

</div>
</div>





</footer>

{{ HTML::script('js/jquery.js') }}
{{ HTML::script('js/bootstrap.min.js') }}
{{ HTML::script('js/jquery.prettyPhoto.js') }}
{{ HTML::script('js/jquery.isotope.min.js') }}
{{ HTML::script('js/main.js') }}
{{ HTML::script('js/wow.min.js') }}




@yield('jslinks')

</body>
</html>