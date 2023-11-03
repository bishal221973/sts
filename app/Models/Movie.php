<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function language()
    {
        return $this->belongsTo(Language::class);
    }

    public function movie_has_tag()
    {
        return $this->hasMany(MovieHasTag::class);
    }

    public function movie_has_tax()
    {
        return $this->hasMany(MovieHasTax::class);
    }

    public function movieShow(){
        return $this->hasMany(MovieShow::class);
    }
}
