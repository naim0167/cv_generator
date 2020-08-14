<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
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
        'name', 'email', 'password', 'avatar', 'firstname', 'lastname', 'address', 'zipcode', 'city', 'phone', 'mobile', 'cv_email', 'birthday', 'nationality', 'language1', 'language2',
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

    public static function uploadAvatar($image)
    {
        $filename = $image->getClientOriginalName();
        (new Self())->deleteOldImage();
        auth()->user()->avatar;
        $image->StoreAs('images',$filename,'public');
        auth()->user()->update(['avatar'=>$filename]);
    }
    protected function deleteOldImage(){
        if($this->avatar){
        Storage::delete('/public/images'.$this->avatar);
        }
    }
}
