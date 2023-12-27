<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\NguoiChoi;
class GoiCredit extends Model
{
    use HasFactory;

    // many to many 
    function nguoiChoi(){
        return $this->belongsToMany(NguoiChoi::class)->withTimestamps();
    }
}