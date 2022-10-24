<?php
 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Services\Services;
use App\Helpers\Helper;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

class PortalController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function login(Request $request)
    {
        $response = Services::getLoginService($request);
        return $response;
    }

    public function register(Request $request){
        $response = Services::getRegisterService($request);
        return $response;
    }

}