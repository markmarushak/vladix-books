<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laratrust\Traits\LaratrustUserTrait;

class User extends Authenticatable
{
    use LaratrustUserTrait;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'phone'
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

    public $appends = ['maxUserLevel'];

    public function getMaxUserLevelAttribute()
    {
        if ($this) {
            $rawRoles = config('laratrust_seeder.role_structure');
            $rolesLevels = array_keys($rawRoles);
            $maxUserRoleLevel = $this->roles
                ->map(function (Role $role) use ($rolesLevels, $rawRoles) {
                    $name = $role->name;
                    $priority = ($name && isset($rawRoles[$name])) ? array_search($name, $rolesLevels) : null;

                    return $priority === null ? min($rolesLevels) : $priority;
                })
                ->max();

            return $maxUserRoleLevel;
        }
    }
}
