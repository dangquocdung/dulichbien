<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MenuTop;
use App\LoaiTin;
use App\TinTuc;
use App\BannerTop;
use App\HinhSlide;
use App\LoaiVB;
use App\VanBan;
use App\LichCongTac;


class FrontController extends Controller
{
  public function __construct()
  {
    $menutop = MenuTop::orderby('thutu','asc')->get();
    view()->share('menutop',$menutop);

    $loaitin = LoaiTin::where('menutop_id',2)->orderby('id','asc')->get();
    view()->share('loaitin',$loaitin);
    //
    // $tintuc = TinTuc::orderby('id','desc')->get();
    // view()->share('tintuc',$tintuc);
    //
    $slider = HinhSlide::orderby('id','asc')->get();
    view()->share('slider',$slider);

    $vanban = VanBan::orderby('created_at','desc')->get();
    view()->share('vanban',$vanban);

  }

  public function getHome()
  {
      $mt = MenuTop::find(2);
      return view('front.trangchu',['mt'=>$mt]);
  }

  public function lichCongTac()
  {
    $lichcongtac = LichCongTac::orderby('created_at','asc')->paginate(12);
    return view('front.lichcongtac',['lichcongtac'=>$lichcongtac]);
  }

  public function getLoaiTin($slug)
  {

      $loaitin = LoaiTin::where('slug',$slug)->first();

      $tintheoloai = TinTuc::where('loaitin_id',$loaitin->id)->orderby('created_at','desc')->paginate(12);

      return view('front.loaitin',['tintheoloai'=>$tintheoloai,'loaitin2'=>$loaitin]);
  }

  public function getChiTietTin($slug)
  {
    $tintuc = TinTuc::where('tieudekhongdau',$slug)->first();
    return view('front.chitiettin',['tin'=>$tintuc]);
  }

  public function getVanBan($slug)
  {

      $loaitin = LoaiTin::where('slug',$slug)->first();

      $vbtheoloai = VanBan::where('loaitin_id',$loaitin->id)->orderby('created_at','desc')->paginate(12);

      return view('front.vanbantheoloaitin',['vbtheoloai'=>$vbtheoloai,'loaitin3'=>$loaitin]);
  }

}