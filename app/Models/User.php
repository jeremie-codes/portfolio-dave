<?php

namespace App\Models;

use Carbon\Carbon;
use Filament\Models\Contracts\FilamentUser;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Filament\Panel;

class User extends Authenticatable implements FilamentUser
{

    protected $fillable = [
        'name',
        'email',
        'email_verified_at',
        'password',
        'remember_token',
        'role',
        'avatar',
        'is_active'
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'is_active' => 'bool'
    ];

    protected $hidden = [
        'password',
        'remember_token'
    ];



    public function canAccessPanel(Panel $panel): bool
    {
        return true;
    }

}
