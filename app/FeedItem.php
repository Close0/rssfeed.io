<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FeedItem extends Model
{
    public function feed()
    {
        return $this->belongsTo('App\Feed');
    }

    public function rssPublishedDate()
    {
        return $this->created_at->toRSSString();
    }
}
