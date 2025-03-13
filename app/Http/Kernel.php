<?php
// filepath: /media/jeremie/Dataset/Projects/Web/Laravel/fret-ser-rapide/app/Http/Kernel.php
namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    // ...
    protected $middleware = [
        // ... autres middlewares ...
        \App\Http\Middleware\LogVisit::class,
    ];

}
