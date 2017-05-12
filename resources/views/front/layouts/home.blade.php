
<!DOCTYPE html>
<html lang="en">
  <head>
    <!--*************************************************-->
    <!-- Tác giả: Đặng Quốc Dũng - PGD TTCNTT-TT Hà Tĩnh -->
    <!-- Email: dungthinhvn@gmail.com - Phone:0986242487 -->
    <!--      Website: http://www.dangquocdung.com       -->
    <!--*************************************************-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../assets/ico/favicon.ico">

    <title>{{ config('app.name', 'Dang Quoc Dung') }}</title>
    <base href="{{asset('')}}">


    <!-- Bootstrap core CSS -->
    <!-- <link href="./css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- Owl Stylesheets -->
    {{-- <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css" --}}

    <!-- Bootstrap custom CSS -->
    <link href="./assets/css/app.css" rel="stylesheet">

    <!-- fancybox -->
    <link rel="stylesheet" href="./assets/css/jquery.fancybox.css?v=2.1.6" type="text/css" media="screen" />

    <!-- Custom styles for this template -->
    {{-- <link href="./assets/css/offcanvas.css" rel="stylesheet"> --}}

  </head>

  <body>
    <div class="navbar navbar-default" role="navigation">
      <div class="container">
        <div class="row">
          <div class="navbar-header">
            <div class="banner-xa">
              <a href="/"><img src="../img/brand/{{ config('app.brand')}}.png" alt="" width="80%"></a>
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
          </div>
        </div>
        </div>

        <div class="menu-ngang">
          <div class="container">
          {{-- <div id="navbar-collapse" class="navbar navbar-default yamm navbar-collapse collapse"> --}}
            <div class="yamm collapse navbar-collapse">

                <ul class="nav navbar-nav">
                  <li>
                    <a href="/"><i class="fa fa-home" aria-hidden="true"></i> Trang chủ</a>
                  </li>
                  @if ($menutop)
                    @foreach ($menutop as $mt)
                      <li class="dropdown yamm-fw">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">{{ $mt->ten }}<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                          <li>
                            <div class="yamm-content">
                              <div class="row">

                                @foreach ($mt->loaitin as $lt)
                                  <div class="col-md-3 col-xs-6">
                                    <div class="thumbnail">
                                      <a href="/loai-tin/{{ $lt->slug }}">
                                        <img alt="260x130" src="{{ $lt->hinh }}">
                                      </a>

                                      <div class="caption">
                                        <h4>{{ $lt->ten }}</h4>
                                        <p>{{ $lt->ghichu }}</p>
                                      </div>
                                    </div>
                                  </div>
                                @endforeach

                              </div>
                            </div>
                          </li>
                        </ul>
                      </li>
                    @endforeach
                  @endif
                </ul>
                <ul class="nav navbar-nav navbar-right">

                  <li>
                    @if (Auth::guest())
                        <li><a href="{{ route('login') }}">Đăng nhập</a></li>
                        {{-- <li><a href="{{ route('register') }}">Đăng kí</a></li> --}}
                    @else

                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                          {{ Auth::user()->name }} ({{ Auth::user()->level }})<span class="caret"></span>
                      </a>

                      <ul class="dropdown-menu" role="menu">
                          <li><a href="/qtht" target="_blank">Trang quản trị</a></li>
                          <li class="divider"></li>
                          <li>
                              <a href="{{ route('logout') }}"
                                  onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                                  Logout
                              </a>

                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  {{ csrf_field() }}
                              </form>
                          </li>
                      </ul>
                    @endif
                  </li>
                </ul>

            </div><!-- /.nav-collapse -->

          </div>
        </div>


    </div><!-- /.navbar -->

    <div class="main-content">
      <div class="container">


      <div class="row row-offcanvas row-offcanvas-right">

        <div class="container">
          <p class="pull-right visible-xs" >
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Menu &raquo;</button>
          </p>
        </div>

        <!-- slider -->
        <div class="list-group">
         <div class="row carousel-holder">
              <div class="col-md-12">
                  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">

                        @php
                          $slide1=$slider->shift();
                          $i = 0;
                        @endphp

                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>

                        @foreach ($slider as $slide)
                          <li data-target="#carousel-example-generic" data-slide-to="{{ $i++ }}"></li>
                        @endforeach
                      </ol>
                      <div class="carousel-inner">

                          <div class="item active">
                              <img class="slide-image" src="{{ $slide1['hinh'] }}" alt="">
                          </div>

                          @foreach ($slider as $slide)

                          <div class="item">
                              <img class="slide-image" src="{{ $slide->hinh}}" alt="">
                          </div>
                          @endforeach

                      </div>
                      <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                          <span class="glyphicon glyphicon-chevron-left"></span>
                      </a>
                      <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                          <span class="glyphicon glyphicon-chevron-right"></span>
                      </a>
                  </div>
              </div>
          </div>
        </div>
        <!-- end slide -->

        <div class="col-xs-12 col-sm-9 col-md-9">

          @yield('content')

        </div><!--/span-->

        <div class="col-xs-6 col-sm-3 col-md-3 sidebar-offcanvas" id="sidebar" role="navigation">
        {{-- <div class="col-xs-6 col-sm-3 col-md-3"> --}}
          @include('front.layouts.menu-right')

        </div>

      </div><!--/row-->
    </div><!--/.container-->
    </div>


    <div class="copyright">
    	<div class="container">
        <div class="content">
          <h4>{{ config('app.name', 'Dang Quoc Dung') }}</h4>
          <p>Chủ quản: {{ config('app.diachi', 'Dang Quoc Dung') }} - Điện thoại: {{ config('app.dienthoai', 'Dang Quoc Dung') }} - Thư điện tử: {{ config('app.email', 'Dang Quoc Dung') }}</p>
          <p>Chịu trách nhiệm nội dung: {{ config('app.cio', 'Dang Quoc Dung') }} - Giám Đốc Sở TT-TT Hà Tĩnh.</p>
          <p>&copy;2017 Bản quyền nội dung thuộc {{ config('app.name', 'Dang Quoc Dung') }} | Thiết kế và phát triển: <a href="http://facebook.com/dung1981" target="_blank">Đặng Quốc Dũng</a> | <a href="http://www.dangquocdung.com" target="_blank">Điều khoản sử dụng thông tin</a> | <a href="http://www.dangquocdung.com" target="_blank">Chính sách bảo mật</a></p>
        </div>
        {{-- <a href="#" class="cd-top cd-is-visible">Top</a> --}}
      </div>
    </div>




    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/owl.carousel.js"></script>
    <script type="text/javascript" src="js/owl.autoplay.js"></script>

    <script src="./js/offcanvas.js"></script>
    <script type="text/javascript" src="./js/jquery.fancybox.pack.js?v=2.1.6"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $(".bando").fancybox();
        $(".thongke").fancybox();
      });
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyClqb4ClPasKU8unirsY-uT9mw2t7G7d8k&callback=initMap" type="text/javascript"></script>
    <script>
        function initialize() {
          var mapOptions = {
            zoom: 15,
            scrollwheel: false,
            center: new google.maps.LatLng({{ config('app.toado','18.335534, 105.906581') }})
          };

          var map = new google.maps.Map(document.getElementById('googleMap'),
              mapOptions);


          var marker = new google.maps.Marker({
            position: map.getCenter(),
            animation:google.maps.Animation.BOUNCE,
            icon: 'img/map-marker.png',
            map: map
          });

        }

        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    <!-- <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-58b3ca27cfd3d5ce"></script> -->
  </body>
</html>
