<?php

namespace App\Http\Middleware;
use Auth;
use Illuminate\Http\Request; 
use Closure;
use Redirect;
class Admin
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
       $is =  Auth::user()->isAdmin;
        //dd($is);
        //return $next($request);
        if($is == 1){
           return $next($request);
           return Redirect::to('/admin/dashboard')->with('success','Welcome to Dashboard');
        }
        
        else{
                
             return $next($request);
             return redirect('home')->with('error','You have not admin access');
            
        }
                    
    }
}
