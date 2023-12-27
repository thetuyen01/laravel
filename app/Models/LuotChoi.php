<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CauHoi;
use App\Models\NguoiChoi;

class LuotChoi extends Model
{
    use HasFactory;

    public function cauHoi() {
        return $this->belongsToMany(CauHoi::class);
    }

    public function NguoiChoi(){
        return $this->belongsTo(NguoiChoi::class);
    }
}