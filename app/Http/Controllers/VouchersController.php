<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Image;

class VouchersController extends Controller
{


  private $api = "http://ubertaxi.dev/api/";

  public function index()
  {
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

  public function craeteVoucher(Request $request) {
    // echo $request;
    error_log('Some message here.');
    $filename = 'default.jpg';
    if($request->hasFile('image_path')){
      $avatar = $request->file('image_path');
      $filename = time() . '.' . $avatar->getClientOriginalExtension();
      Image::make($avatar)->resize(300, 300)->save( public_path('/img/vouchers/' . $filename ) );
      // $user = Auth::user();
      // $user->avatar = $filename;
      // $user->save();
    }
    // echo "10000";
    $client = new \GuzzleHttp\Client();
    $response = $client->request('POST', "http://ubertaxi.dev/api/vouchers", [
        'form_params' => [
          'point' => $request->point,
          'detail' => $request->detail,
          'exp_date' => $request->exp_date,
          'limit_number_of_use' => $request->limit_number_of_use,
          'image_path' => $filename
        ]
    ]);
    // $resultBody  = $response->getBody();
    // $res = json_decode($resultBody);
    // echo "test";
    // echo json_encode($request->point) ;
    // echo "test11";
    // echo json_encode($res->data);


    //$response = $request->send();



    // $user = Auth::user();
    // $redeemed_vouchers = \App\Redeemed_voucher::with('voucher')->get();
    // $owned_vouchers = \App\Owned_voucher::with('voucher')->get();
    return view('vouchers.create');
    }
  }
