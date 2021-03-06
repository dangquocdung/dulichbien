@extends('front.layouts.home')
@section('content')
  <div class="row">
    <div class="list-group">
      <a  class="list-group-item active main-color-bg">
        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Kết quả tìm kiếm <strong>{{ $search }}</strong>
      </a>
      @foreach ($posts as $ttl)
        <div class="list-group-item">
          <div class="row">
            <div class="col-md-3">
              <a href="/chi-tiet-tin/{{ $ttl->tieudekhongdau }}">
                <img width="200px" height="200px" class="img-responsive" src="{{ $ttl->urlhinh }}" alt="{{ $ttl->tieude }}" title="{{ $ttl->tieude }}">
              </a>

            </div>

            <div class="col-md-9">
              <a href="/chi-tiet-tin/{{ $ttl->tieudekhongdau }}">
                <h4>{!! str_replace($search,"<span style='background-color: yellow;'>$search</span>",$ttl->tieude) !!}</h4>
              </a>
              <p>{{ $ttl->tomtat }}</p>
              <a class="btn btn-primary" href="/chi-tiet-tin/{{ $ttl->tieudekhongdau }}">Chi tiết... <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
          </div>
        </div>
      @endforeach
    </div>

  </div><!--/row-->

  {{-- pagination --}}
  {!! $posts->links() !!}
@endsection
