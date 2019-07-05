<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
   public function get_detail()
   {
/*      $url="https://restcountries.eu/rest/v2/regionalbloc/eu'";
       $ch= curl_init();
       curl_setopt($ch, CURLOPT_URL, $url);
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
       $output = curl_exec($ch);
       return $output;*/

       $client = new \GuzzleHttp\Client();
       $request = $client->get('https://restcountries.eu/rest/v2/all');
       $resp = $request->getBody();
       $response = json_decode($resp, true);
       $regions = array();
       foreach($response as $key=>$value){

           $regions [] = $value['region'];

           $region = array_unique($regions);

       }

      return     view('countries')->with('region', $region)->with('response', $response);
     /*  return     view('countries')->with('response', json_decode($response, true);*/
   }

   public function origin_api()
   {
       $data =[
           'name' => "Marijana",
           'mail' => 'marfi@gmail.com'
       ];
         return response()->json($data);
       $response = $client->request('GET', '/api/user?api_token='.$token);
   }

   /*public function search()
   {
$req = $_REQUEST['region'];
       $client = new \GuzzleHttp\Client();
       $request = $client->get('https://restcountries.eu/rest/v2/regionalbloc/' . $req);
       $response = $request->getBody();
       return $response;
   }*/
}
