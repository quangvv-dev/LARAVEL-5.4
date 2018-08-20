<?php

namespace App\Http\Middleware;

use Closure;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;

class VerifyJWTToken
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
        try {
            $user = JWTAuth::toUser($request->input('token'));
        }catch (JWTException $e) {

            if($e instanceof \Tymon\JWTAuth\Exceptions\TokenExpiredException)
            { //token het han
                return response()->json(['token_expired'], $e->getStatusCode());
            }
            else if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenInvalidException)
            {   //token chua hop le
                return response()->json(['token_invalid'], $e->getStatusCode());
            }
            else
            {   //chua co token
                return response()->json(['error'=>'Token is required']);
            }
        }
        return $next($request);
    }
}
