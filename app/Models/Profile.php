<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function profileImage(){
      $imagePath = ($this->image) ? $this->image: 'profile/default-user.png';
      return '/storage/'. $imagePath;
    }
    
    public function user(){
      return $this->belongsTo(User::class);
    }

    public function sti(){
      return $this->belongsTo(Sti::class);
    }
}
