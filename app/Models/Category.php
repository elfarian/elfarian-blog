<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'category',
    ];

    protected $hidden = [

    ];

    public function artikels()
    {
        return $this->hasMany(Artikel::class,'category_id');
    } 
}
