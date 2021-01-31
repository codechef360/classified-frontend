@extends('layouts.master-layout')

@section('title')
    Home
@endsection
@section('extra-styles')
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/owl.transitions.css">
    <link rel="stylesheet" href="assets/css/animate.min.html">
    <link rel="stylesheet" href="assets/css/rateit.css">
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
@endsection
@section('current-page')
    Home
@endsection

@section('main-content')
    <div class="outer-top-ts top-banner">
        <div class="container">
            <img class="img-responsive" src="/assets/images/banners/top-banner.png" alt="">
        </div>
    </div>
    <div class="body-content outer-top-ts" id="top-banner-and-menu">
        <div class="container">
            <div class="slider-section">
                <!-- ============================================== SIDEBAR ============================================== -->
                <div class="col-xs-12 col-sm-3 col-md-2 sidebar">
                    <!-- ================================== TOP NAVIGATION ================================== -->
                    <div class="side-menu side-menu-inner animate-dropdown outer-bottom-xs">
                        <nav class="yamm megamenu-horizontal">
                            <ul class="nav">
                                @foreach($categories as $category)

                                    <li class="{{$category->getSubCategories->count() > 0 ? 'dropdown menu-item' : 'menu-item'}}"> <a href="#" class="{{$category->getSubCategories->count() > 0 ? 'dropdown-toggle' : ''}}" data-toggle="dropdown">{{$category->category_name ?? ''}}</a>
                                       @if($category->getSubCategories->count() > 0)
                                                <ul class="dropdown-menu mega-menu">
                                                    <li class="yamm-content">
                                                        <div class="row">
                                                            @foreach($category->getSubCategories as $sub)
                                                            <div class="col-xs-12 col-sm-12 col-lg-4">
                                                                <ul>
                                                                    <li><a href="#">{{$sub->sub_category_name ?? ''}}</a></li>
                                                                </ul>
                                                            </div>
                                                            @endforeach
                                                            @if(!is_null($category->featured_image))
                                                                    <div class="dropdown-banner-holder"> <a href="javascript:void(0);"><img alt="" src="/assets/images/banners/banner-side.png"></a> </div>
                                                            @endif
                                                        </div>
                                                    </li>
                                                </ul>
                                           @endif
                                    </li>
                                @endforeach

                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-9 col-md-10 homebanner-holder">
                    <div id="hero">
                        <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
                            <div class="item" style="background-image: url(assets/images/sliders/03.jpg);">
                                <div class="container-fluid">
                                    <div class="caption bg-color vertical-center text-left">
                                        <div class="slider-header fadeInDown-1">Top Brands</div>
                                        <div class="big-text fadeInDown-1"> New Collections</div>
                                        <div class="excerpt fadeInDown-2 hidden-xs">
                                            <span>Lorem ipsum dolor sit amet, consectetur adipisicing.</span>
                                        </div>
                                        <div class="button-holder fadeInDown-3">
                                            <a href="index6c11.html?page=single-product" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Shop Now</a>
                                        </div>
                                    </div>
                                    <!-- /.caption -->
                                </div>
                                <!-- /.container-fluid -->
                            </div>
                            <!-- /.item -->
                            <div class="item" style="background-image: url(assets/images/sliders/01.jpg);">
                                <div class="container-fluid">
                                    <div class="caption bg-color vertical-center text-left">
                                        <div class="slider-header fadeInDown-1">Spring 2019</div>
                                        <div class="big-text fadeInDown-1"> Women Fashion</div>
                                        <div class="excerpt fadeInDown-2 hidden-xs">
                                            <span>Nemo enim ipsam voluptatem quia voluptas sit aspernatur.</span>
                                        </div>
                                        <div class="button-holder fadeInDown-3">
                                            <a href="index6c11.html?page=single-product" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Shop Now</a>
                                        </div>
                                    </div>
                                    <!-- /.caption -->
                                </div>
                                <!-- /.container-fluid -->
                            </div>
                            <!-- /.item -->
                        </div>
                        <!-- /.owl-carousel -->
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <!-- ============================================== CONTENT ============================================== -->
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="wide-banners wow fadeInUp outer-bottom-bs">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="wide-banner cnt-strip">
                                    <div class="image">
                                        <img class="img-responsive" src="assets/images/banners/home-banner1.jpg" alt="">
                                    </div>
                                </div>
                                <!-- /.wide-banner -->
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="wide-banner cnt-strip">
                                    <div class="image">
                                        <img class="img-responsive" src="assets/images/banners/home-banner3.jpg" alt="">
                                    </div>
                                </div>
                                <!-- /.wide-banner -->
                            </div>
                        </div>
                    </div>
                    <!-- /.wide-banners -->
                    <div class="search-result-container ">
                        <div class="more-info-tab clearfix ">
                            <h3 class="new-product-title pull-left">Latest Deals</h3>
                        </div>
                        <div id="myTabContent" class="tab-content category-list">
                            <div class="tab-pane active " id="grid-container">
                                <div class="category-product">
                                    <div class="row">
                                        @if(count($adverts->where('status',1)) > 0)
                                            @foreach($adverts->where('status',1) as $advert)
                                                <div class="col-sm-6 col-md-4 col-lg-4 wow fadeInUp">
                                                    <div class="item">
                                                        <div class="products">
                                                            <div class="product">
                                                                <div class="product-image">
                                                                    <div class="image">
                                                                        <a href="{{Auth::check() ? route('advert-detail', $advert->slug) : route('view-advert', $advert->slug) }}">
                                                                            <img src="/assets/attachments/ads/featured_image/{{$advert->featured_image}}" alt="{{$advert->title ?? ''}}">
                                                                        </a>
                                                                    </div>
                                                                    <!--<div class="tag new"><span>-15%</span></div>-->
                                                                </div>
                                                                <div class="product-info text-left">
                                                                    <div class="store"><a href="#">{{$advert->getCategory->category_name ?? ''}}</a></div>
                                                                    <h3 class="name">
                                                                        <a href="{{route('advert-detail', $advert->slug)}}">{{strlen($advert->title) > 35 ? substr($advert->title,0,35).'...' : $advert->title }}</a>
                                                                    </h3>
                                                                    <div class="rating rateit-small"></div>
                                                                    <div class="description"></div>
                                                                    <div class="product-price">
                                                                        <span class="price"> ₦{{number_format($advert->price ?? 0, 2)}} </span>
                                                                        <!--<span class="price-before-discount">$ 800</span>-->
                                                                    </div>
                                                                </div>
                                                                @if(Auth::check())
                                                                    <div class="cart clearfix animate-effect">
                                                                        <div class="action">
                                                                            <ul class="list-unstyled">
                                                                                <li class="lnk wishlist addToWishlist" data-product="{{$advert->id}}">
                                                                                    <a class="add-to-cart" href="javascript:void(0);" data-toggle="tooltip" data-placement="right" title="Add to Wishlist">
                                                                                        <i class="icon fa fa-heart"></i>
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                                @if(Auth::check())
                                                    <input type="hidden" name="customer" id="customer" value="{{Auth::user()->id}}">
                                                @endif
                                        @else
                                            <div class="col-sm-12 col-md-12 col-lg-12 wow fadeInUp">
                                                <h3 class="text-center">There're currently no active adverts</h3>
                                                <p class="text-center">
                                                    <a class="btn-lg btn btn-uppercase btn-primary shop-now-button" href="{{route('post-ads')}}">Post An Advert</a>
                                                </p>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="clearfix filters-container bottom-row">
                            <div class="text-right">
                                <div class="pagination-container">
                                    <ul class="list-inline list-unstyled">
                                        {{$adverts->links()}}
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div style="margin-top: 20px;" class=" wide-banners wow fadeInUp outer-bottom-bs">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="cnt-strip">
                                    <div class="image1">
                                        <img class="img-responsive" src="assets/images/banners/home-banner.jpg" alt="">
                                    </div>
                                    <div class="strip strip-text">
                                        <div class="strip-inner">
                                            <h2 class="text-right">Amazing Sunglasses
                                                <br>
                                                <span class="shopping-needs">Get 40% off on selected items</span>
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="new-label">
                                        <div class="text">NEW</div>
                                    </div>
                                    <!-- /.new-label -->
                                </div>
                                <!-- /.wide-banner -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('extra-scripts')
    <script src="/assets/js/interaction.js"></script>
@endsection
