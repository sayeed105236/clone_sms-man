<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplicationController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  public function index()
  {
    $client = new \GuzzleHttp\Client();
    $token= 'J3sooaUiwplGWsJ4ICvHhi34OXORYkuE';
    $headers = [
        // 'Authorization' => 'Bearer ' . $api_key,
        'Accept'        => 'application/json',
    ];
    //Duplicate these three lines for calling other api
    $application_api = $client->request('GET','http://api.sms-man.com/control/applications?token=J3sooaUiwplGWsJ4ICvHhi34OXORYkuE', [
            'headers' => $headers
       ]);


  $application_api=$application_api->getBody()->getContents();
  //dd(json_decode($application_api));

  $data = json_decode($application_api, true);

  
    return view('pages.Admin.application',compact('data'));
  }
}
