@extends('front.layouts.home')
@section('content')
  <div class="row">
    <div class="list-group">
      <a  class="list-group-item active main-color-bg">
        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Video
      </a>
      <div class="list-group-item">
        <div class="row">
          @foreach ($videos as $video)
            <div class="col-md-4">
              <div class="video-container" style="margin-bottom:10px">
                {!! $video->videoclip !!}
              </div>
            </div>
          @endforeach
      </div>
    </div>
    </div>
  </div>
@endsection
