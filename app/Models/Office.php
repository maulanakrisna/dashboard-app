<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    use HasFactory;

    public function address(){
      return $this::hasOne(Office::class);
    }

    protected static function boot(){
      parent::boot();

      static::created(
        function ($office){
          $office->address()->create([
            'address1' => $office->name,
          ]);

          Mail::to($user->email)->send(new NewUserWelcomeMail());
        }
      );
    }
}
