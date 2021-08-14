<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    use HasFactory;

    public function address(){
      return $this->hasOne(Address::class);
    }

    public function sti(){
      return $this->belongsTo(Sti::class);
    }

    public function parent(){
      return $this->belongsTo(self::class, 'parent_id');
    }

    public function childs(){
      return $this->hasMany(self::class, 'parent_id');
    }

    public function networks(){
      return $this->hasMany(Network::class);
    }

    public function computers(){
      return $this->hasMany(Computer::class);
    }

    public function itsupports(){
      return $this->hasMany(Itsupport::class);
    }

    protected static function boot(){
      parent::boot();

      static::created(
        function ($office){
          $office->address()->create([
            'address1' => $office->name,
          ]);
        }
      );
    }
}
