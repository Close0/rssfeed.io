<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feed extends Model
{
    /**
     * Fillable fields for a feed
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'link',
        'description',
    ];

    public function items()
    {
        return $this->hasMany('App\FeedItem');
    }

    public function owner()
    {
        $this->belongsTo('App\User');
    }

    public function ownedBy(User $user)
    {
        return $this->user_id == $user->id;
    }
}
