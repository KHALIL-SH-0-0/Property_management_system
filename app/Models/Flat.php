<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Flat extends Model{

    protected $guarded=[];

    protected $table = 'flats';

    public function city(){
        return $this-> belongsTo(City::class);
    }
    public function governorate(){
        return $this-> belongsTo(Governorate::class);
    }
    public function users(){
        return $this-> belongsTo(User::class);
    }
    // public function users(){
    //     return $this-> belongsToMany(User::class,'flat_user');
    // }

    public function favorite(){
        return $this->belongsToMany(User::class, 'favorites')
            ->withTimestamps()
            ->withPivot('id');
    }

    public function renters(){
        return $this->belongsToMany(User::class, 'flat_user')
              ->withPivot('start_date', 'end_date', 'status', 'rate')
              ->withTimestamps();
}
    public function reviews()
    {
        return $this->hasMany(FlatReview::class);
    }

}

