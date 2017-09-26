<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Comments
 *
 * @property-read \App\Post $post
 * @property-read \App\User $user
 * @mixin \Eloquent
 * @property int $id
 * @property int $user_id
 * @property int $post_id
 * @property string $body
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Comments whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Comments whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Comments whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Comments wherePostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Comments whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Comments whereUserId($value)
 */
class Comments extends Model
{
    protected $guarded = [];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function video()
    {
        return $this->belongsTo(Video::class);
    }

    public function getUserName()
    {
        return empty($this->user->name) ? "Guest" : $this->user->name;
    }

    public function getUserAvatar()
    {
        return $this->user ? $this->user->avatar : null;
    }
}
