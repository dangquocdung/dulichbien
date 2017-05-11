
<div class="list-group">
  {!! Form::open(['method'=>'POST', 'url'=>'/tim-kiem', 'class'=>'list-group-item','role'=>'search']) !!}
    <div class="input-group">
      <input type="hidden" name="_token" value="{{csrf_token()}}"/>
      <input type="text" class="form-control" name="search" placeholder="Tìm kiếm thông tin...">
      <div class="input-group-btn">
        <button class="btn btn-default" type="submit">
          <i class="glyphicon glyphicon-search"></i>
        </button>
      </div>
    </div>
  {!! Form::close() !!}
</div>

<div class="list-group">
  <a  class="list-group-item active main-color-bg" href="/cam-nang-du-lich">
    <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Cẩm nang du lịch...
  </a>
  <a href="/cam-nang-du-lich">
    <img class="img-responsive" src="./img/cndl/cam nang-p01.jpg" style="display:block; margin:0 auto" width="100%">
  </a>
</div>

@if ($video1)

<div class="list-group">
  <a class="list-group-item active main-color-bg" href="/chuyen-muc/video">
    <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Video...
  </a>
  <div class="video-container">
    {!! $video1->videoclip !!}
  </div>
</div>

@endif




<div class="list-group">
  <a  class="list-group-item active main-color-bg">
    <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Bản đồ Hà Tĩnh
  </a>
  <a class="bando" href="./img/map/hatinh_map.jpg">
    <img class="img-responsive" src="./img/map/hatinh_map.jpg" style="display:block; margin:0 auto" width="100%">
  </a>
</div>



<div class="list-group">
  <a  class="list-group-item active main-color-bg">
    <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Thời tiết Hà Tĩnh
  </a>
  <a class="dichvucong" href="#">
    <a href="https://www.accuweather.com/vi/vn/ha-tinh/353418/weather-forecast/353418" class="aw-widget-legal">
    <!--
    By accessing and/or using this code snippet, you agree to AccuWeather’s terms and conditions (in English) which can be found at https://www.accuweather.com/en/free-weather-widgets/terms and AccuWeather’s Privacy Statement (in English) which can be found at https://www.accuweather.com/en/privacy.
    -->
    </a>
    <div id="awcc1491117457730" class="aw-widget-current"  data-locationkey="353418" data-unit="c" data-language="vi" data-useip="false" data-uid="awcc1491117457730"></div>
    <script type="text/javascript" src="https://oap.accuweather.com/launch.js"></script>
  </a>
</div>

<div class="list-group">
  <a  class="list-group-item active main-color-bg">
    <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Địa điểm
  </a>

  <div id="googleMap"></div>
</div>
