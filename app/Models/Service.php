<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'titre',
        'description',
        'image',
        'category_id',
        'est_publie'
    ];

    public function category() {
        return $this->belongsTo(Categorie::class);
    }
}
