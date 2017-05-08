<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VouchersController extends Controller
{


  private $api = "http://ubertaxi.dev/api/";

  public function index()
  {
    echo 'hhhh';
      $client = new \GuzzleHttp\Client();
      $call = "vouchers";
      $response = $client->request('GET', "{$this->api}{$call}", [
          'form_params' => []
      ]);
      $resBody = $response->getBody();
      $res = json_decode($resBody);
      return view('vouchers.index', [
          'statusCode' => $response->getStatusCode(),
          'responseHeader' => $response->getHeader('content-type')[0],
          'success' => $res->success,
          'data' => $res->data,
          'resBody' => $response->getBody()
      ]);
  }

  public function show($id)
  {
      $client = new \GuzzleHttp\Client();
      $call = "vouchers/{$id}";
      $response = $client->request('GET', "{$this->api}{$call}", [
          'form_params' => []
      ]);
      $resBody = $response->getBody();
      $res = json_decode($resBody);

      // Todo: request album from /api/singers/$id/albums

      return view('vouchers.show', [
          'statusCode' => $response->getStatusCode(),
          'responseHeader' => $response->getHeader('content-type')[0],
          'success' => !is_null($res)? $res->success: false,
          'data' => !is_null($res)?$res->data: null,
          'resBody' => $response->getBody()
      ]);
  }

  public function create() {
      return view('vouchers.create');
  }

}
