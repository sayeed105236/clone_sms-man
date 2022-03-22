<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
     public function index()
     {


         return view('pages.User.index');
     }
     public function adminHome()
     {
       $client = new \GuzzleHttp\Client();
       $token= 'J3sooaUiwplGWsJ4ICvHhi34OXORYkuE';
       $headers = [
           // 'Authorization' => 'Bearer ' . $api_key,
           'Accept'        => 'application/json',
       ];
       //Duplicate these three lines for calling other api
       $balance_api = $client->request('GET','http://api.sms-man.com/control/get-balance?token=J3sooaUiwplGWsJ4ICvHhi34OXORYkuE', [
               'headers' => $headers
          ]);


     $balance_api=$balance_api->getBody()->getContents();

     $data = json_decode($balance_api, true);
     

         return view('pages.Admin.index',compact('data'));
     }
}
