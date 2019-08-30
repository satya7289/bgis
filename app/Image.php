<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //
    protected $fillable =['path','title','alt'];
    public function page()
    {
        return $this->belongsTo('\App\Page');
    }
}
