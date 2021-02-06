<!DOCTYPE html>
<html lang="en">

<head>
<!-- Meta -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<meta name="keywords" content="Classified ads">
<meta name="robots" content="all">
<title>{{config('app.name')}} | @yield('title')</title>

<!-- Bootstrap Core CSS -->
<link rel="stylesheet" href="/assets/css/bootstrap.min.css">

<!-- Customizable CSS -->
<link rel="stylesheet" href="/assets/css/main.css">
<link rel="stylesheet" href="/assets/css/blue.css">
    <link rel="stylesheet" href="/assets/css/toastify.min.css">
@yield('extra-styles')

<!-- Icons/Glyphs -->
<link rel="stylesheet" href="/assets/css/font-awesome.css">

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Barlow:200,300,300i,400,400i,500,500i,600,700,800" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
</head>
<body class="cnt-home">
<header class="header-style-1">
  <div class="top-bar animate-dropdown">
    <div class="container">
      <div class="header-top-inner">
        <div class="cnt-account">
          <ul class="list-unstyled">
              @if(Auth::check())
                <li><a href="{{route('marketplace')}}"><i class="icon fa fa-user"></i>Marketplace</a></li>
                <li><a href="{{route('my-adverts')}}"><i class="icon fa fa-user"></i>My Adverts</a></li>
                <li><a href="#"><i class="icon fa fa-heart"></i>Wishlist</a></li>
                <li><a href="{{route('logout')}}"><i class="icon fa fa-shopping-cart"></i>My Account</a></li>
                <li><a href="{{route('logout')}}"><i class="icon fa fa-shopping-cart"></i>Logout</a></li>
              @endif
              @if(!Auth::check())
                <li><a href="{{route('register')}}"><i class="icon fa fa-check"></i>Register</a></li>
                <li><a href="{{route('login')}}"><i class="icon fa fa-lock"></i>Login</a></li>
              @endif
          </ul>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
  <div class="main-header">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-2 logo-holder">

          <div class="logo"> <a href="home.html"> <img src="/assets/images/logo.png" alt="logo"> </a> </div>

        </div>
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 top-search-holder">

          <div class="search-area">
            <form>
              <div class="control-group">
                  <input class="search-field" placeholder="Search here..." />
                <a class="search-button" href="#" ></a> </div>
            </form>
          </div>
        </div>
         <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 navmenu">
      <div class="yamm navbar navbar-default" role="navigation">
        <div class="navbar-header">
       <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
       <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
      </div>
      <div class="top-cart-row">

          <div class="dropdown dropdown-cart">
              <a href="{{route('post-ads')}}" class="dropdown-toggle lnk-cart">
                <div class="items-cart-inner">
                  <div class="total-price-basket" style="padding:10px 10px; width: 150px; text-align: center"> <span class="lbl">Post An Ad</span>  </div>
                </div>
              </a>
          </div>
        </div>
        </div>
    </div>
  </div>


</header>
      <div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="/">Home</a></li>
				<li class='active'>@yield('current-page')</li>
			</ul>
		</div>
	</div>
</div>
<div class="body-content outer-top-ts">
    @yield('different-layout')
	<div class="container">
        <div class="row">
            <div class="col-md-12">
                @yield('main-content')


            </div>
        </div>
    </div>
</div>
     @include('partials._footer')
