@extends('front.layouts.home')
@section('content')
  <div class="row">
    <div class="list-group">

      <a  class="list-group-item active main-color-bg">
        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> {{ $tin->loaitin->ten}}
      </a>

      <div class="list-group-item">

        <div class="chi-tiet-tin">
          <h3>{{ $tin->tieude }}</h3>
          <div class="thong-tin">
            <p>người đăng <strong>{{ $tin->nguoidang->name }}</strong></p>
            <p><span class="glyphicon glyphicon-time"></span> {{ Carbon\Carbon::parse($tin->created_at)->format('d-m-Y h:m:s') }}</p>
          </div>

          <div class="hinh-minh-hoa">
            <img src="{{ $tin->urlhinh }}" alt="{{ $tin->tieude }}">
          </div>

          <hr>
          <div class="news-desc">
            <p>{{ $tin->tomtat }}</p>
          </div>
          <div class="noi-dung">
            {!! $tin->noidung !!}
        </div>
        </div>
      </div>
    </div>

  </div><!--/row-->
@endsection
