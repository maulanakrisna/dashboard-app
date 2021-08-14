<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Itsupport extends Model
{
    use HasFactory;

    public function office(){
      return $this->hasMany(Office:class);
    }
}
