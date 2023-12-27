<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\TaiKhoan;
use App\Models\NguoiChoi;

class HinhDaiDien extends Model
{
    use HasFactory;

    public function taiKhoan(){
        return $this->belongsTo(TaiKhoan::class);
    }

    public function nguoiChoi(){
        return $this->hasOneThrough(NguoiChoi::class, TaiKhoan::class);
    }
}