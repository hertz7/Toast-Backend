<?php
/**
 * Created by PhpStorm.
 * User: Ruchi
 * Date: 5/4/2017
 * Time: 12:28 PM
 */
namespace App\Traits;
use App\User;
use \Firebase\JWT\JWT;

trait CreateJsonToken{
    public function createToken($user){

        $key=config('app.key');
        $token=[
            "id" => $user->id,
            "name" => $user->name,
            "email" => $user->email
        ];
        $jwt='';
        try{
            $jwt=JWT::encode($token,$key);
        }
        catch(\Exception $e){
            return $jwt;
        }
        return $jwt;
    }


}