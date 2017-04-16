@extends('qtht.layouts.home')

@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
      <strong>Danh sách Loại tin</strong>
    </div>

    <div class="panel-body">
      <div style="padding-bottom:10px">
        <a class="btn btn-primary" href="/qtht/menu-doc/them-loai-tin"><i class="fa fa-plus-circle" aria-hidden="true"></i> Thêm Loại tin</a>
      </div>

      <div class="table-responsive">
        <table class="table table-striped table-hover">
          <tr>
            <th>Chuyên mục</th>
            <th>Loại tin</th>
            <th>Hình</th>
            <th>TT Hiển thị</th>
            <th>Số tin</th>
            <th>Ghi chú</th>
            <th>Thao tác</th>
          </tr>
          @foreach ($chuyenmuc as $cm)

            @foreach ($cm->loaitin as $lt)
            <tr>
              <td style="text-align:left;">{{ $lt->menutop->ten }}</td>
              <td style="text-align:left;">{{ $lt->ten }}</td>
              <td>
                <a class="urlhinh" href="{{ $lt->hinh }}">
                  <img class="img-responsive" src="{{ $lt->hinh }}" style="max-width:100px; max-height:50px; float:left">
                </a>
              </td>
              <td>{{ $lt->thutu }}</td>
              <td>
                <?php $i=0; ?>
                @foreach ($tintuc as $tt)
                  @if ($tt->loaitin_id == $lt->id)
                    <?php $i++ ; ?>
                  @endif
                @endforeach
                {{ $i }}
              </td>
              <td style="text-align:left;">{{ $lt->ghichu }}</td>
              <td style="text-align: center;">
                <form action="#" method="POST">
                  <input type="hidden" name="_method" value="DELETE">
                  <input type="hidden" name="_token" value="{{csrf_token()}}">
                  <a href="{{ url('qtht/menu-doc/sua-loai-tin/'.$lt->slug) }}" class="btn btn-warning btn-xs">
                    <span class="glyphicon glyphicon-edit"></span>
                  </a>
                  <a href="{{ url('qtht/menu-doc/xoa-loai-tin/'.$lt->id.'?token='.csrf_token()) }}" class="btn btn-danger btn-xs" onclick="return confirm('Bạn chắc chắn muốn xoá loại tin này?')">
                    <span class="glyphicon glyphicon-trash"></span>
                  </a>
                </form>
              </td>
            </tr>

            @endforeach
            <tr>
              <td colspan="7"></td>
            </tr>

          @endforeach

        </table>
      </div>
    </div>
</div>

@endsection
