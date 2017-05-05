<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RedeemedVoucherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $voucher = new \App\Redeemed_voucher;
      $voucher->owned_voucher_id = $request->owned_voucher_id;
      $voucher->redeem_date = date("Y-m-d");

      if ($voucher->save()){
          return [
              'success' => true,
              'data' => "Redeemed voucher was saved with id: {$vouchers->id}",
              'id' => $vouchers->id
          ];
      } else {
          return [
              'success' => false,
              'data' => "Some error occurred"
          ];
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $voucher = \App\Redeemed_voucher::find($id);
        if (!is_null($voucher))
            return [
                'success' => true,
                'data' => $voucher
            ];
        return [
            'success' => false,
            'data' => 'Redeemed voucher not found'
        ];
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
