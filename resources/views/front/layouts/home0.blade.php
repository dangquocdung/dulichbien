
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
    <!-- Bootstrap custom CSS -->
    <link href="./assets/css/app.css" rel="stylesheet">

    <!-- fancybox -->
    <link rel="stylesheet" href="./assets/css/jquery.fancybox.css?v=2.1.6" type="text/css" media="screen" />

    <!-- Custom styles for this template -->
    <link href="./assets/css/offcanvas.css" rel="stylesheet">


  </head>

  <body>
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="row">
          <div class="navbar-header">
            <!-- Banner -->
            {{-- @if (count($bannertop)>0)

            <div class="col-md-4 col-xs-10">
            @endif --}}
              <div class="banner-xa"><a href="/"><img src="../img/brand/brand.png" alt="" width="80%"></a></div>

            {{-- @if (count($bannertop)>0)
            </div>
            <div class="col-md-8 hidden-sm hidden-xs">
              <div class="banner-top-right">
                <div id="carousel-top-right" class="carousel slide" data-ride="carousel">
                  <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                      @php
                        $i=1;
                      @endphp
                      @foreach ($bannertop as $bt)

                        @if ($i==1)

                        <div class="item active">

                          @else
                            <div class="item">

                          @endif
                          <a href="{{ $bt->urlbanner }}" target="_blank"><img src="{{ $bt->urlhinh }}" alt=""></a>
                        </div>
                        @php
                          $i++;
                        @endphp
                      @endforeach
                  </div>
                </div>
              </div>
            </div>

            @endif --}}
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>

        </div>

        <div class="row">
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
              @foreach ($menutop as $mt)
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                  {{ $mt->ten }} <span class="caret"></span>
                </a>
                <ul class="dropdown-menu" role="menu">
                  @foreach ($loaitin as $lt)
                    @if ( $lt->menutop_id == $mt->id )
                      <li><a href="/{{$lt->menutop->tenkhongdau}}/{{$lt->id}}-{{$lt->tenkhongdau}}"> {{ $lt->ten }}</a></li>
                    @endif
                  @endforeach
                </ul>
              </li>
              @endforeach
            </ul>

            <ul class="nav navbar-nav">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                  Liên kết <span class="caret"></span>
                </a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="http://www.hatinh.gov.vn" target="_blank">Cổng TTĐT UBND tỉnh</a></li>
                    <li><a href="http://congbao.hatinh.gov.vn" target="_blank">Công báo UBND tỉnh</a></li>
                    <li class="divider"></li>
                    <li><a href="http://congbao.chinhphu.vn" target="_blank">Công báo Chính phủ</a></li>
                    <li><a href="http://vbpl.vn/Pages/portal.aspx" target="_blank">CSDL Quốc gia về VBPL</a></li>
                    <li><a href="http://phapdien.moj.gov.vn/Pages/home.aspx" target="_blank">Cổng TTĐT Pháp điển</a></li>
                    <li><a href="http://csdl.thutuchanhchinh.vn/Pages/trang-chu.aspx" target="_blank">CSDL Quốc gia về TTHC</a></li>
                </ul>
              </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
              <li>
                <a href="#" data-toggle="modal" data-target="#loginModal">
                  Đăng nhập
                </a>
              </li>
            </ul>
          </div><!-- /.nav-collapse -->


        </div>




      </div><!-- /.container -->
    </div><!-- /.navbar -->

    <div class="main-content">
      <div class="container">

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="container">
          <p class="pull-right visible-xs"  >
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Menu &raquo;</button>
          </p>
        </div>

        <div class="col-xs-12 col-sm-9 col-md-9">

          @yield('content')

        </div><!--/span-->

        <div class="col-xs-6 col-sm-3 col-md-3 sidebar-offcanvas" id="sidebar" role="navigation">

          @include('layouts.menu-right')

        </div>

      </div><!--/row-->
    </div><!--/.container-->
    </div>


    <div class="copyright">
    	<div class="container">
        <div class="content">
          <h4>Cổng THÔNG TIN ĐIỆN TỬ {{ config('app.name', 'Dang Quoc Dung') }}</h4>
          <p>Địa chỉ: {{ config('app.diachi', 'Dang Quoc Dung') }} - Điện thoại: {{ config('app.dienthoai', 'Dang Quoc Dung') }} - EMail: {{ config('app.email', 'Dang Quoc Dung') }}</p>
          <p>Chịu trách nhiệm nội dung: {{ config('app.cio', 'Dang Quoc Dung') }}</p>
          <p>&copy;2017 Bản quyền nội dung thuộc {{ config('app.name', 'Dang Quoc Dung') }} | Thiết kế và phát triển: <a href="http://dangquocdung.com" target="_blank">Trung tâm CNTT-TT Hà Tĩnh</a> | <a href="#">Điều khoản sử dụng thông tin</a> | <a href="#">Chính sách bảo mật</a></p>
        </div>
        <a href="#" class="cd-top cd-is-visible">Top</a>
      </div>
    </div>




    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
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
            center: new google.maps.LatLng(18.335534, 105.906581)
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
