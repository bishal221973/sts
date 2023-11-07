<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tax extends Model
{
    use HasFactory;

    protected $guarded=['id'];

    public function taxFor(){
        return $this->hasMany(TaxFor::class,'taxe_id','id');
    }
}
