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

              <div class="col-md-7 col-sm-12 col-xs-12 tintuc">
                <div class="col-md-5 col-sm-5 minhhoa">
                  <a href="/chi-tiet-tin/{{ $tin1['tieudekhongdau']}}">
                      <img src="{{ $tin1['urlhinh'] }}" alt="" width="100%">
                  </a>
                </div>
                <div class="col-md-7 col-sm-7">
                  {{-- <div class="row"> --}}
                    <a href="/chi-tiet-tin/{{ $tin1['tieudekhongdau']}}">
                      <h4>
                        {{ $tin1['tieude'] }}
                      </h4>
                    </a>
                    <div class="news-desc">
                      {{ $tin1['tomtat'] }}...
                    </div>

                  {{-- </div> --}}

                </div>
              </div>

              <div class="col-md-5 col-sm-5 hidden-xs hidden-sm">
                @foreach ($data as $tn)
                  <div class="tin-moi">
                    <table>
                      <tr>
                        <td><img src="{{ $tn->urlhinh }}" alt="" style="max-width:50px;"></td>
                        <td  style="text-align:left; padding-left: 10px;"><a href="/chi-tiet-tin/{{$tn->tieudekhongdau}}">{{ $tn->tieude }}</a></td>
                      </tr>
                    </table>
                  </div>
                @endforeach

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
