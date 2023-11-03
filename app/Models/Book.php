<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $guarded=['id'];

    public function bookedSeat(){
        return $this->hasMany(BookedSeat::class);
    }

    public function shows(){
        return $this->belongsTo(MovieShow::class,'show_id','id');
    }
}
