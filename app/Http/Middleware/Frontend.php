<?php

namespace App\Http\Middleware;

use App\Model\Location;
use App\Model\Service;
use Closure;
use Illuminate\Support\Facades\View;

class Frontend
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
        $services = Service::where('status',1)->get();
        $locations = Location::where('status',1)->get();
        View::share(['services'=>$services,'locations' => $locations]);
        return $next($request);

    }
}
