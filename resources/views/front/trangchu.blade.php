@extends('front.layouts.home')
@section('content')

<div class="row">

    @foreach ($menutop as $mt)

        <div class="list-group">
          <a class="list-group-item active main-color-bg" href="/chuyen-muc/{{ $mt->slug }}">
            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> {{ $mt->ten }}
          </a>
          <div class="list-group-item" style="padding-bottom:0px; padding-left:0px; padding-right:0px; overflow:hidden">
            <div class="row">

              @php
                $data = $mt->tintuc->where('active','1')->sortByDesc('created_at')->take(5);
                $tin1 = $data->shift();
              @endphp

              <div class="col-md-7 col-xs-12 tintuc">
                <div class="col-md-5 minhhoa">
                  <a href="/chi-tiet-tin/{{ $tin1['tieudekhongdau']}}">
                      <img src="{{ $tin1['urlhinh'] }}" alt="" width="100%">
                  </a>
                </div>
                <div class="col-md-7">
                  <a href="/chi-tiet-tin/{{ $tin1['tieudekhongdau']}}">
                    <h4>
                      {{ $tin1['tieude'] }}
                    </h4>
                  </a>
                  <div class="news-desc">
                    {{ $tin1['tomtat'] }}...
                  </div>
                </div>
              </div>

              <div class="col-md-5 col-xs-12">
                <div class="container">


                @foreach ($data as $tn)
                  <div class="row">

                  <div class="tin-moi">
                    <table>
                      <tr>
                        <td><img src="{{ $tn->urlhinh }}" alt="" style="max-width:50px;"></td>
                        <td  style="text-align:left; padding-left: 10px;"><a href="/chi-tiet-tin/{{$tn->tieudekhongdau}}">{{ $tn->tieude }}</a></td>
                      </tr>
                    </table>
                  </div>
                  </div>

                  {{-- <a href="/chi-tiet-tin/{{ $tt->tieudekhongdau}}">
                    <h5>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      {{ $tt->tieude }}
                    </h5>
                  </a> --}}
                @endforeach
                </div>
              </div>
            </div>
            <div class="footer-mega-link">
              <a href="/chuyen-muc/{{ $mt->slug }}"><small>Nhiều hơn...</small></a>
            </div>
          </div>
        </div>

  @endforeach

</div>
@endsection
