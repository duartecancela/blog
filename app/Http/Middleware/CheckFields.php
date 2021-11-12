<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckFields
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $title=$request->input('title');
        $description=$request->input('description');

        if(empty($title)||empty($description)){
            return redirect('/articles/create');
        }

        return $next($request);
    }
}
