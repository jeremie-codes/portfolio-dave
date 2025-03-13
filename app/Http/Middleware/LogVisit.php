<?php
// filepath: /media/jeremie/Dataset/Projects/Web/Laravel/Jr-tracking/app/Http/Middleware/LogVisit.php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Visit;

class LogVisit
{
    public function handle(Request $request, Closure $next)
    {
        Visit::create([
            'ip_address' => $request->ip(),
        ]);

        return $next($request);
    }
}
