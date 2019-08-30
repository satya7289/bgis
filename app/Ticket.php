<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravelista\Comments\Commentable;

class Ticket extends Model
{
    use Commentable;
    
    protected $fillable = [
        'title', 'body'
    ];

    public function owner() {
        return $this->belongsTo('App\User');
    }

    public function against() {
        return $this->belongsTo('App\User');
    }
}
