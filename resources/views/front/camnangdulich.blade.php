@extends('front.layouts.home1')
@section('content')
  <div class="row">
      <div class="col-md-12 col-xs-12">

          <img class="img-responsive" src="../img/cndl/cam nang-p01.jpg" style="display:block; margin:0 auto; padding-bottom:10px;" width="70%">


      </div>

        @for ($i = 2;$i < 92 ;$i++)
        <div class="col-md-2 col-xs-6">
          @if ($i < 10 )
            <a class="cam-nang" href="../img/cndl/cam nang-p0{{ $i }}.jpg">
              <img class="img-responsive" src="../img/cndl/thumbnail/cam nang-p0{{ $i }}.jpg" style="display:block; margin:0 auto; padding-bottom:10px;" width="100%">
            </a>
          @else
            <a class="cam-nang" href="../img/cndl/cam nang-p{{ $i }}.jpg">
              <img class="img-responsive" src="../img/cndl/thumbnail/cam nang-p{{ $i }}.jpg" style="display:block; margin:0 auto; padding-bottom:10px;" width="100%">
            </a>

          @endif
        </div>
      @endfor


  </div>
@endsection
