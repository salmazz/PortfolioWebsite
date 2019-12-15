<?php

namespace App\Http\Middleware;

use Closure;
use App\Tracker;

class Vistors
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {  
       Tracker::firstOrCreate([
            'ip'   => request()->ip(),
            'date' => date('Y-m-d'),
        ]);

        return $next($request);
    
    }
}
