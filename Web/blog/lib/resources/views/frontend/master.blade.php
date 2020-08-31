<!DOCTYPE html>
<html>
<head>
    <base href="{{asset('public/layout/fontend')}}/">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Điện thoại vui - @yield('title')</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    {{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">--}}
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">--}}
    <script type="text/javascript">
        $(function() {
            var pull        = $('#pull');
            menu        = $('nav ul');
            menuHeight  = menu.height();

            $(pull).on('click', function(e) {
                e.preventDefault();
                menu.slideToggle();
            });
        });

        $(window).resize(function(){
            var w = $(window).width();
            if(w > 320 && menu.is(':hidden')) {
                menu.removeAttr('style');
            }
        });
    </script>
</head>
<body>
<!-- header -->
<header id="header">
    <div class="container">
        <div class="row">
            <div id="logo" class="col-md-3 col-sm-12 col-xs-12">
                <h1>
                    <a href="{{asset('/')}}"><p>Minh store</p></a>
                    <nav><a id="pull" class="btn btn-danger" href="#">
                            <i class="fa fa-bars"></i>
                        </a></nav>
                </h1>
            </div>
{{--            <form method="get" action="{{asset('search/')}}">--}}
{{--                <div id="search" class="col-md-7 col-sm-12 col-xs-12">--}}
{{--                    <input type="text" name="text" value="Nhập từ khóa ...">--}}
{{--                    <input type="submit" name="submit" value="Tìm Kiếm">--}}
{{--                </div>--}}
{{--                <div id="cart" class="col-md-2 col-sm-12 col-xs-12">--}}
{{--                    <a class="display" href="#">Giỏ hàng</a>--}}
{{--                    a class="display" href="#">Giỏ hàng</a>--}}
{{--                </div>--}}
{{--            </form>--}}
{{--            <div class="col-xs-6 col-sm-6 col-md-6">--}}
                <div id="search-bar" class="col-md-6 col-sm-12 col-xs-12">
                    <form class="navbar-form" role="search" method="get" action="{{asset('search/')}}">
                        <div class="input-group"  style="margin-top: 30px">
                            <div class="input-group-btn">
                                <input  type="text" class="form-control" placeholder="Search" name="result" size="50">
                            </div>
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i>Tìm kiếm</button>
                            </div>

                        </div>
                    </form>
{{--                </div>--}}
            </div>
            <div id="cart" class="col-md-3 col-sm-12 col-xs-12">
                <a class="display" href="{{asset('cart/show')}}">Giỏ hàng({{Cart::count()}})</a>
{{--                <a href="{{asset('cart/show')}}" style="color: white; height: 30px"><i class="fa fa-cart-plus" style=" height: 30px"></i>({{Cart::count()}})</a>--}}
            </div>
        </div>
    </div>
</header><!-- /header -->
<!-- endheader -->

<!-- main -->
<section id="body">
    <div class="container">
        <div class="row">
            <div id="sidebar" class="col-md-3">
                <nav id="menu">
                    <ul>
                        <li class="menu-item">danh mục sản phẩm</li>
                        @foreach($categories as $cate)
                        <li class="menu-item"><a href="{{asset('category/'.$cate->cate_id.'/'.$cate->cate_slug.'.html')}}" title="">{{$cate->cate_name}}</a></li>
                        @endforeach
                    </ul>
                    <!-- <a href="#" id="pull">Danh mục</a> -->
                </nav>

            </div>
            <div id="main" class="col-md-9">
                <!-- main -->
                <!-- phan slide la cac hieu ung chuyen dong su dung jquey -->
                <div id="slider">
                    <div id="demo" class="carousel slide" data-ride="carousel">

                        <!-- Indicators -->
                        <ul class="carousel-indicators">
                            <li data-target="#demo" data-slide-to="0" class="active"></li>
                            <li data-target="#demo" data-slide-to="1"></li>
                            <li data-target="#demo" data-slide-to="2"></li>
                        </ul>

                        <!-- The slideshow -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="img/home/slide1.png" alt="">
                            </div>
                            <div class="carousel-item">
                                <img src="img/home/slide2.png" alt="">
                            </div>
                            <div class="carousel-item">
                                <img src="img/home/slide3.png" alt="">
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#demo" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                    </div>
                </div>

                @yield('main')
            </div>
        </div>
    </div>
</section>
<!-- endmain -->

<!-- footer -->
<footer id="footer">
    <div id="footer-t">
        <div class="container">
            <div class="row">
                <div id="logo-f" class="col-md-3 col-sm-12 col-xs-12 text-center">
                    <a href="{{asset('/')}}"><img src="img/home/nuce.jpg" style="width: 100px; height: 100px"></a>
                </div>
{{--                <div id="about" class="col-md-3 col-sm-12 col-xs-12">--}}
{{--                    <h3>About us</h3>--}}
{{--                    <p class="text-justify"></p>--}}
{{--                </div>--}}
                <div id="hotline" class="col-md-3 col-sm-12 col-xs-12">
                    <h3>Hotline</h3>
                    <p>Phone: (+84) 0336009090</p>
                    <p>Email: luong.huu.minh.1998@gmail.com</p>
                </div>
                <div id="footer-b-l" class="col-md-6 col-sm-12 col-xs-12 text-center">
                    <p>Trường đại học xây dựng © 2020 Nuce</p>
                </div>

            </div>
{{--            <div class="row">--}}
{{--                <div id="footer-b-l" class="col-md-6 col-sm-12 col-xs-12 text-center">--}}
{{--                    <p>Trường đại học xây dựng</p>--}}
{{--                </div>--}}
{{--                <div id="footer-b-r" class="col-md-6 col-sm-12 col-xs-12 text-center">--}}
{{--                    <p>© 2020 Nuce</p>--}}
{{--                </div>--}}
{{--            </div>--}}

        </div>
{{--        <div id="footer-b">--}}
{{--            <div class="container">--}}
{{--                <div class="row">--}}
{{--                    <div id="footer-b-l" class="col-md-6 col-sm-12 col-xs-12 text-center">--}}
{{--                        <p>Trường đại học xây dựng</p>--}}
{{--                    </div>--}}
{{--                    <div id="footer-b-r" class="col-md-6 col-sm-12 col-xs-12 text-center">--}}
{{--                        <p>© 2020 Nuce</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div id="scroll">--}}
{{--                <img src="img/home/scroll.png">--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
</footer>
<!-- endfooter -->
</body>
</html>
