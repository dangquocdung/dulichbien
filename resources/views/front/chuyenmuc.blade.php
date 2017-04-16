@extends('front.layouts.home')
@section('content')
  <div class="row">
    @php
      $data = $chuyenmuc->tintuc->where('active','1')->sortByDesc('created_at')->take(12);
    @endphp
    <div class="list-group">
      <a  class="list-group-item active main-color-bg">
        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> {{ $chuyenmuc->ten}}
      </a>
      @foreach ($data as $ttl)
        <div class="list-group-item">
          <div class="row">
            <div class="col-md-3 col-sm-5 col-xs-5">
              <a href="/chi-tiet-tin/{{ $ttl->tieudekhongdau }}">
                <img width="200px" height="200px" class="img-responsive" src="{{ $ttl->urlhinh }}" alt="{{ $ttl->tieude }}" title="{{ $ttl->tieude }}">
              </a>
            </div>

            <div class="col-md-9 col-sm-7 col-xs-7">
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
  </div><!--/row-->
@endsection
