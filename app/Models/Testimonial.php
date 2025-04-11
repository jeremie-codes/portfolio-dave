<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $table = 'testimonials';

    protected $fillable = [
        'name',
        'email',
        'service_id',
        'comment',
        'is_visible',
    ];

    protected $casts = [
        'is_visible' => 'boolean',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    
}
