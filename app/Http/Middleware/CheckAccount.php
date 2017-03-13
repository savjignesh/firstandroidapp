<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckAccount
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        date_default_timezone_set('America/Los_Angeles');

        if (Auth::guard($guard)->check()) {

            $account = Auth::user()->account;
            if($account){

                if($account->isActive == 1){
                    session(['Account'=> $account->toArray()]);

                    $request->session()->put('domain', $account->domain);
                }else{
                    dd('Your account is not active. Please contact Admin');
                }

            }
        }

       // print_r(session('account'));
        return $next($request);
    }

}
