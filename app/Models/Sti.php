<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sti extends Model
{
    use HasFactory;

    public function offices(){
      return $this->hasMany(Office::class);
    }

    public function profiles(){
      return $this->hasMany(Profile::class);
    }
}
