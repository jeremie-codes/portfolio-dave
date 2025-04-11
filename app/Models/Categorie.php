<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $fillable = [
        'name',
        'is_visible',
        'description',
        'image',
    ];

    // Dans Categorie.php (modèle)
    public function getAvailableTypes(): array
    {
        return match($this->name) {
            'Transport de Marchandise' => [
                'maritime' => 'maritime',
                'aérien' => 'aérien',
                'terrestre' => 'terrestre',
                'multimodal' => 'multimodal',
            ],
            'Logistique et Gestion des stocks' => [
                'stocks' => 'stocks',
                'groupage' => 'groupage',
                'Terrestre' => 'Terrestre',
                'Miltimodal' => 'Miltimodal',
            ],
            'Consultation, Conseil et Services Spécialisés' => [
                'conseil' => 'conseil',
                'express' => 'express',
                'audit' => 'audit',
            ],
            default => [],
        };
    }

}
