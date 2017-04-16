@extends('front.layouts.home')
@section('content')
  <div class="row">
    <div class="list-group">
      <a  class="list-group-item active main-color-bg">
        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> {{ $loaitin2->ten}}
      </a>
      @foreach ($tintheoloai as $ttl)
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
    {{-- <div class="panel panel-default">
        <div class="panel-heading" style="background-color:#337AB7; color:white;">
            <h4><b>{{ $loaitin2->ten}}</b></h4>
        </div>

        @foreach ($tintheoloai as $ttl)
          <div class="row-item row">
              <div class="col-md-3">
                  <a href="/chi-tiet-tin/{{ $ttl->tieudekhongdau }}">
                      <br>
                      <img width="200px" height="200px" class="img-responsive" src="{{ $ttl->urlhinh }}" alt="">
                  </a>
              </div>

              <div class="col-md-9">
                  <a href="/chi-tiet-tin/{{ $ttl->tieudekhongdau }}">
                    <h3>{{ $ttl->tieude }}</h3>
                  </a>
                  <p>{{ $ttl->tomtat }}</p>
                  <a class="btn btn-primary" href="/chi-tiet-tin/{{ $ttl->tieudekhongdau }}">Chi tiết... <span class="glyphicon glyphicon-chevron-right"></span></a>
              </div>

              <div class="break"></div>
          </div>
        @endforeach
    </div> --}}

  </div><!--/row-->

  {{-- pagination --}}
  {!! $tintheoloai->links() !!}
@endsection
