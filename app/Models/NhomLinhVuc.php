<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\LinhVuc;
use App\Models\CauHoi;

class NhomLinhVuc extends Model
{
    use HasFactory;


    public function dslinhVuc(){
        return $this->hasMany(LinhVuc::class);
    }

    // has many through
    public function dsCauHoi(){
        return $this->hasManyThrough(CauHoi::class, LinhVuc::class);
    }
}