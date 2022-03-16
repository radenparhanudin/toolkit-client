<?php

namespace App\Http\Middleware;

use App\Pengaturan;
use Closure;
use Illuminate\Http\Request;

class CheckPengaturan
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $pengaturan = Pengaturan::all();
        if($pengaturan->count() == 0){
            return redirect()->route('pengaturan.index');
        }
        return $next($request);
    }
}
