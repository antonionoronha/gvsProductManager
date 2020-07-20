<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;

class User extends Authenticatable
{
    use Notifiable;
    use Uuid;
    protected $keyType = 'string';
    public $incrementing = false;
    protected $guarded = [];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email','department', 'password','role_id',
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

    public function role()
    {
        return $this->hasOne('App\Role','id','role_id');
    }

    private function checkIfUserHasRole($need_role)
    {
        return (strtolower($need_role)==strtolower($this->role->name)) ? true : null;
    }

    public function hasRole($roles)
    {
        if(is_array($roles))
        {
            foreach($roles as $need_role)
            {
                if($this->checkIfUserHasRole($need_role))
                {
                    return true;
                }
            }
        }else{
            return $this->checkIfUserHasRole($roles);
        }
        return false;
    }


}
