<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VanBan extends Model
{
  protected $table = 'vanban';

  public function nguoidang()
  {
    return $this->belongsTo('App\User','user_id','id');
  }

  public function loaivb()
  {
    return $this->belongsTo('App\LoaiVB','loaivb_id','id');
  }

  public function loaitin()
  {
    return $this->belongsTo('App\LoaiTin','loaitin_id','id');
  }
}
