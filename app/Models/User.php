<?php

namespace App\Models;

use App\Util\crypt\hash;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;


    public static function uploadAvatar($image)
    {
        $filename = hash::getRandomHashForImageName();
        (new self())::deleteOldImage();
        $image->storeAs('images', $filename, 'public');
        auth()->user()->update(['avatar' => $filename]);
    }

    protected function deleteOldImage()
    {
        if (auth()->user()->avatar)
            Storage::delete('/public/images/' . auth()->user()->avatar);
    }


    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar'
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


}
