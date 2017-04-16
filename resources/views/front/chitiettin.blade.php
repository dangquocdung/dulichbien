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
            <img src="{{ $tin->urlhinh }}" alt="{{ $tin->tieude }}" class="img-responsive">
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

  <hr>

  {{-- tin moi nhat --}}

  <div class="row">
    <div class="list-group">
      <a  class="list-group-item active main-color-bg">
        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Các tin mới đăng
      </a>
      @foreach ($namtinmoinhat as $ttl)
        <div class="list-group-item">
          <div class="row">
            <div class="col-md-3 hinh-minh-hoa">
                @if ($ttl->urlhinh)
                  <img class="img-responsive" src="{{ $ttl->urlhinh }}" alt="{{ $ttl->tieude }}" title="{{ $ttl->tieude }}">
                @else
                  <img class="img-responsive" src="http://placehold.it/150x150" alt="{{ $ttl->tieude }}" title="{{ $ttl->tieude }}">
                @endif
            </div>
            <div class="col-md-9">
              <a href="/chi-tiet-tin/{{ $ttl->tieudekhongdau }}">
                <h4>{{ $ttl->tieude }}</h4>
              </a>
              <p>{{ $ttl->tomtat }}</p>
              <a class="btn btn-primary" href="/chi-tiet-tin/{{ $ttl->tieudekhongdau }}">Chi tiết... <span class="glyphicon glyphicon-chevron-right"></span></a>

            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
  <!--/row-->

  {{-- tin cùng loại --}}

  @php

    $namtincungloai  = $loaitinchitiet->tintuc->where('active','1')->sortByDesc('created_at')->take(5);

  @endphp

  <div class="row">
    <div class="list-group">
      <a  class="list-group-item active main-color-bg">
        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Các tin cùng loại
      </a>
      @foreach ($namtincungloai as $ttl)
        <div class="list-group-item">
          <div class="row">
            <div class="col-md-3 hinh-minh-hoa">
                @if ($ttl->urlhinh)
                  <img class="img-responsive" src="{{ $ttl->urlhinh }}" alt="{{ $ttl->tieude }}" title="{{ $ttl->tieude }}">
                @else
                  <img class="img-responsive" src="http://placehold.it/150x150" alt="{{ $ttl->tieude }}" title="{{ $ttl->tieude }}">
                @endif
            </div>
            <div class="col-md-9">
              <a href="/chi-tiet-tin/{{ $ttl->tieudekhongdau }}">
                <h4>{{ $ttl->tieude }}</h4>
              </a>
              <p>{{ $ttl->tomtat }}</p>
              <a class="btn btn-primary" href="/chi-tiet-tin/{{ $ttl->tieudekhongdau }}">Chi tiết... <span class="glyphicon glyphicon-chevron-right"></span></a>

            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
  <!--/row-->
@endsection
