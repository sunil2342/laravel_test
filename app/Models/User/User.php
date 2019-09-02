<?php

namespace App\Models\User;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'middle_name','last_name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
	 * The media that belong to the user.
	 */
	public function media() {
		return $this->belongsTo(\App\Models\Media\Media::class, 'media_id');
    }

    /**
	 * The posts that belongs to the user.
	 */
	public function posts() {
		return $this->belongsToMany(\App\Models\Post\Post::class);
    }

    /**
	 * The comments that belongs to the user.
	 */
	public function comments() {
		return $this->belongsToMany(\App\Models\Post\Comment::class);
    }
    
    
}
