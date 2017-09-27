<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

/**
 * App\User
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Comments[] $comments
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Post[] $posts
 * @mixin \Eloquent
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string|null $website
 * @property string|null $description
 * @property string $password
 * @property string|null $remember_token
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereWebsite($value)
 */
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function comments()
    {
        return $this->hasMany(Comments::class);
    }

    public function registerFromGithub($user)
    {
       $user = User::create([
            'name' => $user->nickname,
            'email' => $user->email,
            'password' => bcrypt('password'),
            'token' => $user->token,
            'avatar'    => $user->avatar,
	        'website' => 'github',
        ]);

        Auth::login($user);

    }

    public function registerFromVk($user)
    {
        $user = User::create([
            'name' => $user->nickname,
            'email' => $user->email,
            'password' => bcrypt('password'),
            'token' => $user->token,
            'avatar'    => $user->avatar,
            'website' => 'vk',
        ]);

        Auth::login($user);
    }

    public function registerFromFb($user)
    {
        $user = User::create([
            'name' => $user->nickname,
            'email' => $user->email,
            'password' => bcrypt('password'),
            'token' => $user->token,
            'avatar'    => $user->avatar,
            'website' => 'fb',
        ]);

        Auth::login($user);
    }

    public function registerFromOk($user)
    {
        $user = User::create([
            'name' => $user->nickname,
            'email' => $user->email,
            'password' => bcrypt('password'),
            'token' => $user->token,
            'avatar'    => $user->avatar,
            'website' => 'ok',
        ]);

        Auth::login($user);
    }

    public function registerFromTw($user)
    {
        $user = User::create([
            'name' => $user->nickname,
            'email' => $user->email,
            'password' => bcrypt('password'),
            'token' => $user->token,
            'avatar'    => $user->avatar,
            'website' => 'tw',
        ]);

        Auth::login($user);
    }

    public function registerFromGm($user)
    {
        $user = User::create([
            'name' => $user->nickname,
            'email' => $user->email,
            'password' => bcrypt('password'),
            'token' => $user->token,
            'avatar'    => $user->avatar,
            'website' => 'gm',
        ]);

        Auth::login($user);
    }

    public function getUserAvatar()
    {
    	return Auth::user() && Auth::user()->avatar ?  Auth::user()->avatar : 'https://static.independent.co.uk/s3fs-public/thumbnails/image/2016/07/28/16/avatar.jpg';
    }
}
