<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovieHasTax extends Model
{
    use HasFactory;

    protected $guarded=["id"];

    public function tax(){
        return $this->belongsTo(Tax::class,"taxe_id","id");
    }
}
