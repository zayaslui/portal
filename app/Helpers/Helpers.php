<?php

namespace App\Helpers;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Collection;
use Illuminate\Session\SessionManager;

class Helper {

    public function __construct(){}


    /**
     * example
     * Adds a new item to the cart.
     *
     * @param string $id
     * @param string $name
     * @param string $price
     * @param string $quantity
     * @param array $options
     * @return void
     */

    public static function test(){
        return "testing...  ";
    }

    public static function getUrlProviderSkankHunt() : string{
        $APP_SKANKHUNT_PROVIDER = $_ENV['APP_SKANKHUNT_PROVIDER'];
        return $APP_SKANKHUNT_PROVIDER;
    }

    public static function getUrlProviderRest() : string{
        $APP_REST_PROVIDER = $_ENV['APP_REST_PROVIDER'];
        return $APP_REST_PROVIDER;
    }

    public static function validatorParams(Array $params){
        $validator = Validator::make($params, [
            'client_id'     => 'required',
            'client_secret' => 'required',
            'grant_type'    => 'required',
            'username'      => 'required',
            'password'      => 'required'
        ]);
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors(),
            ], 401);
        }    
    }

}