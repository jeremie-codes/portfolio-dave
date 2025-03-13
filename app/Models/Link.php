<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    // protected $table = "linkes";
    protected $fillable = [
        'phone',
        'phone_2',
        'phone_3',
        'whatsapp',
        'instagram',
        'email',
        'email_2',
        'adresse',
        'adresse_2',
        'adresse_3',
        'facebook',
        'linkedin'
    ];
}
