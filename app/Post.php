<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];    //umesto da pisemo fillable pa sta moze da bude fillable, ovako pustimo sve da prodje

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
