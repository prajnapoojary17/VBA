<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Closure;
use Session;


class CheckLogin
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
       // dd($request->segments(0));
        if(session()->get('userAuthDetail')){
            return $next($request);
        }
       /* if($request->segments()[0]=='logout'){
             
        }
	if(session()->get('userAuthDetail')){
            if(session()->get('userAuthDetail')->status=='pending'){
                 //return redirect('/billing-address');
                // dd(session()->get('userAuthDetail'));
               // return redirect()->to('billing-address');
            } elseif(session()->get('userAuthDetail')->status=='active' && session()->get('userAuthDetail')->totalLicenses=='1'){
                dd(session()->get('userAuthDetail'));
                 return redirect()->to('license');
            }*/
            
         else {
              return redirect()->to('/');
        }
    }
	 /*if(session()->get('msg')!='success'){ return redirect('/login');}
	 return $next($request);	
    
	}*/
}
