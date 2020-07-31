<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'artikels_id','name','email','comment'
    ];

    protected $hidden = [

    ];

    public function artikel()
    {
        return $this->belongsTo(Artikel::class,'artikels_id','id');
    } 
}
