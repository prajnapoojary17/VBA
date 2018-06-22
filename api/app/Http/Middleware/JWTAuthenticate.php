<?php

namespace App\Http\Middleware;

use Closure;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;
use App\Traits\ApiResponse;

class JWTAuthenticate
{
    use ApiResponse;
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
      try {
        if (! $user = JWTAuth::parseToken()->authenticate()) {
	 
	 return $this->respondWithError('401', 'UN_AUTHORIZED',[]);
          
	}
    } catch (\Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {
       return $this->respondWithError('190', $e->getMessage(),[]);
           
        } catch (\Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {
	 
	  return $this->respondWithError('401', $e->getMessage(),[]);
           
        } catch (\Tymon\JWTAuth\Exceptions\JWTException $e) {
            return $this->respondWithError('401', $e->getMessage(),[]);
        }
    
       return $next($request);
    }
}
