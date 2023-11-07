<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaxFor extends Model
{
    use HasFactory;

    protected $guarded=['id'];

    public function type(){
        return $this->belongsTo(Type::class);
    }
    public function tax(){
        return $this->belongsTo(Tax::class,'taxe_id','id');
    }
}
