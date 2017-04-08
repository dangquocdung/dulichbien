@extends('front.layouts.home')
@section('content')
  <div class="row">
    <div class="list-group">

      <a  class="list-group-item active main-color-bg">
        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> {{ $tin->loaitin->ten}}
      </a>

      <div class="list-group-item">
        <div class="chi-tiet-tin">
            <!-- Title -->
              <h3>{{ $tin->tieude }}</h3>

              <!-- Author -->
              <p class="lead">
                  người đăng <a href="#">{{ Auth::user()->name }}</a>
              </p>

              <!-- Preview Image -->
              {{-- <img class="img-responsive" src="http://placehold.it/900x300" alt=""> --}}

              <!-- Date/Time -->
              <p><span class="glyphicon glyphicon-time"></span> {{ $tin->created_at }}</p>

              <hr>

              <!-- Post Content -->
              <p class="lead">{{ $tin->tomtat }}</p>
              {!! $tin->noidung !!}
              <hr>



        </div>
      </div>
    </div>

  </div><!--/row-->
@endsection
