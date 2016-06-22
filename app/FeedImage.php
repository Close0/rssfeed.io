<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FeedImage extends Model
{
    public function feed()
    {
        return $this->belongsTo('App\Feed');
    }
}
