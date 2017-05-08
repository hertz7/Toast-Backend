<?php

namespace App\Http\Middleware;

use Closure;
use Firebase\JWT\JWT;
use Firebase\JWT\SignatureInvalidException;

class VerifyToken
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
        if($request && $request->has('token')){

            try{
                $decoded = JWT::decode($request->token, config('app.key'), array('HS256'));
                $request->attributes->add(["jwt"=>array($decoded)]);

            }
            catch(SignatureInvalidException $sie){
                return response()->json(['status' => 403, "token"=>"Not Authorized"]);

            }
            catch(\Exception $e){
                return response()->json(['status' => 403, "token"=>$e->getMessage()]);

            }

            return $next($request);
        }
        else{
            return response()->json(['status' => 403, "token"=>"Not Authorized"]);
        }
    }
}
