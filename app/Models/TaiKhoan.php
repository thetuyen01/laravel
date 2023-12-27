<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\NguoiChoi;
use App\Models\HinhDaiDien;

class TaiKhoan extends Model
{
    use HasFactory;
    protected $fillable = ['email', 'password', 'is_admin'];

    public function nguoiChoi(){
        return $this->belongsTo(NguoiChoi::class);
    }

    public function hinhDaiDien(){
        return $this->hasOne(HinhDaiDien::class);
    }
}