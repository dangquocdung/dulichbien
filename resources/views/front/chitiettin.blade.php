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
            <p><span class="glyphicon glyphicon-time"></span> {{ Carbon\Carbon::parse($tin->created_at)->format('h:m d-m-Y ') }} <span>- <strong>{{ $tin->nguoidang->name }}</strong></span></p>
          </div>

          <div class="news-desc">
            <p>{{ $tin->tomtat }}</p>
          </div>
          <hr>

          {{-- <div class="pull-right col-md-8"> --}}
            <div class="hinh-minh-hoa">
              <img src="{{ $tin->urlhinh }}" alt="{{ $tin->tieude }}" class="img-responsive" width="80%">
            </div>
            <div class="noi-dung">
              {!! $tin->noidung !!}
            </div>

            @if ( Auth::user() && Auth::user()->is_admin() )
              <div class="" style="text-align:right">
                <form action="#" method="POST" enctype="multipart/form-data">
                  <input type="hidden" name="_method" value="DELETE">
                  <input type="hidden" name="_token" value="{{csrf_token()}}">

                  <a href="{{ url('qtht/sua-tin-bai/'.$tin->tieudekhongdau) }}" class="btn btn-warning btn-xs">
                    <span class="glyphicon glyphicon-edit"></span>
                  </a>

                  <a href="{{ url('qtht/xoa-tin-bai/'.$tin->id.'?token='.csrf_token()) }}" class="btn btn-danger btn-xs" onclick="return confirm('Bạn chắc chắn muốn xoá tin?')">
                    <span class="glyphicon glyphicon-trash"></span>
                  </a>
                </form>

              </div>

            @endif
          {{-- </div> --}}
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
            <div class="col-md-3 col-sm-5 col-xs-5 hinh-minh-hoa">
                @if ($ttl->urlhinh)
                  <img class="img-responsive" src="{{ $ttl->urlhinh }}" alt="{{ $ttl->tieude }}" title="{{ $ttl->tieude }}">
                @else
                  <img class="img-responsive" src="http://placehold.it/150x150" alt="{{ $ttl->tieude }}" title="{{ $ttl->tieude }}">
                @endif
            </div>
            <div class="col-md-9 col-sm-7 col-xs-7">
              <a href="/chi-tiet-tin/{{ $ttl->tieudekhongdau }}">
                <h4>{{ $ttl->tieude }}</h4>
              </a>
              <div class="hidden-xs">
                <p>{{ $ttl->tomtat }}</p>
              </div>
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
            <div class="col-md-3 col-sm-5 col-xs-5 hinh-minh-hoa">
                @if ($ttl->urlhinh)
                  <img class="img-responsive" src="{{ $ttl->urlhinh }}" alt="{{ $ttl->tieude }}" title="{{ $ttl->tieude }}">
                @else
                  <img class="img-responsive" src="http://placehold.it/150x150" alt="{{ $ttl->tieude }}" title="{{ $ttl->tieude }}">
                @endif
            </div>
            <div class="col-md-9 col-sm-7 col-xs-7">
              <a href="/chi-tiet-tin/{{ $ttl->tieudekhongdau }}">
                <h4>{{ $ttl->tieude }}</h4>
              </a>
              <div class="hidden-xs">
                <p>{{ $ttl->tomtat }}</p>
              </div>

              <a class="btn btn-primary" href="/chi-tiet-tin/{{ $ttl->tieudekhongdau }}">Chi tiết... <span class="glyphicon glyphicon-chevron-right"></span></a>

            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
  <!--/row-->
@endsection
