<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\TaiKhoan;
use App\Models\HinhDaiDien;
use App\Models\GoiCredit;
use App\Models\LuotChoi;

class NguoiChoi extends Model
{
    use HasFactory;

    // one to one
    public function taikhoan(){
        return $this->hasOne(TaiKhoan::class);
    }

    // has one through
    public function hinhDaiDien(){
        return $this->hasOneThrough(HinhDaiDien::class, TaiKhoan::class, 'nguoi_choi_id', 'nguoi_choi_id','id','id');
    }

    // many to many
    public function goiCredit() {
        return $this->belongsToMany(GoiCredit::class)->withTimestamps();
    }

    public function dsLuotChoi(){
        return $this->hasMany(LuotChoi::class);
    }
}