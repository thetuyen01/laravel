<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\LinhVuc;
use App\Models\LuotChoi;

class CauHoi extends Model
{
    use HasFactory;

    function linhVuc(){
        return $this->belongsTo(LinhVuc::class);
    }

    function luotChoi(){
        return $this->belongsToMany(LuotChoi::class);
    }
}