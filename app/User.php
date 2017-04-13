<?php

namespace App;

use App\Image;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function avatar()
    {
        return $this->hasOne(Image::class, 'id', 'avatar_id');
    }

    public function avatarPath()
    {
        if( !$this->avatar_id ) {
            return null;
        }

        return $this->avatar->path();
    }
}
