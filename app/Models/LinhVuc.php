<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\NhomLinhVuc;
use App\Models\CauHoi;

class LinhVuc extends Model
{
    use HasFactory;

    public function nhomLinhVuc(){
        return $this->belongsTo(NhomLinhVuc::class);
    }

    // one to many
    public function dsCauHoi(){
        return $this->hasMany(CauHoi::class);
    }
}