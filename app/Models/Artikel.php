<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Artikel extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title','slug','content','author','category_id'
    ];

    protected $hidden = [

    ];

    public function galleries()
    {
        return $this->hasMany(ArtikelGallery::class,'artikels_id');
    } 

    public function comments()
    {
        return $this->hasMany(Comment::class,'artikels_id');
    } 

    public function categories()
    {
        return $this->belongsTo(Category::class,'category_id','id');
    } 
}
