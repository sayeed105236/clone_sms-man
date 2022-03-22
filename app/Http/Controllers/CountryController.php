<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CountryController extends Controller
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
    $country_api = $client->request('GET','http://api.sms-man.com/control/countries?token=J3sooaUiwplGWsJ4ICvHhi34OXORYkuE', [
            'headers' => $headers
       ]);


  $country_api=$country_api->getBody()->getContents();
  //dd(json_decode($country_api));

  $data = json_decode($country_api, true);

  
    return view('pages.Admin.country',compact('data'));
  }
}
