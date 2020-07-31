<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ArtikelGallery extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'artikels_id','photo'
    ];

    protected $hidden = [

    ];

    public function artikel()
    {
        return $this->belongsTo(Artikel::class,'artikels_id','id');
    } 
    
    public function getPhotoAttribute($value)
    {
        return url('storage/' . $value);
    }
}
