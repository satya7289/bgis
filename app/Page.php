<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    //
    protected $fillable = ['directory','name','title','keyword','description','url'];
    public function image()
    {
        return $this->hasMany('\App\Image');
    }
}
