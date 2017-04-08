@extends('front.layouts.home')
@section('content')
  <div class="list-group">
    <a  class="list-group-item active main-color-bg">
      <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> {{ $loaitin3->ten}}
    </a>
    <div class="list-group-item">
      <div class="row">
          <div class="table-responsive">
            <table class="table table-striped table-hover">
              <tbody>
              <tr>
                <th>Ngày ban hành</th>
                <th>Loại văn bản</th>
                <th>Số</th>
                <th>Trích yếu</th>
                <th>Tệp Văn bản</th>
                <th>Người kí</th>

              </tr>
              @foreach ($vbtheoloai as $vb)
              <tr>
                <td>{{ $vb->ngaybanhanhvb }}</td>
                <td>{{ $vb->loaivb->tenloaivb }}</td>
                <td>{{ $vb->sovb }}</td>
                <td style="text-align:left;">{{ str_limit($vb->trichyeuvb, $limit=120, $end='......') }}</td>
                <td>
                  <a href="{{$vb->tepvanban}}" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a>
                </td>
                <td>{{ $vb->nguoiki }}</td>

              </tr>
              @endforeach
              </tbody>
            </table>
            {{-- pagination --}}
            {!! $vbtheoloai->links() !!}
          </div>
      </div>
    </div>
  </div>

@endsection
