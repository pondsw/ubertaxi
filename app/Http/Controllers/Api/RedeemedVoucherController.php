<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DateTime;

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
      echo $request->code;
      $ownedVoucher = \App\Owned_voucher::where('code', $request->code)->first();

      echo $ownedVoucher;
      $voucher = \App\Voucher::find($ownedVoucher->voucher_id);
      $date1 = new DateTime();
      $date2 = new DateTime($voucher->exp_date);
      // echo $date1;
      echo $voucher->exp_date;
      echo var_dump($date1 < $date2);
      if($date1 > $date2){
        return [
            'success' => false,
            'data' => "Voucher has expired"
        ];
      }


      $redemmVoucher = new \App\Redeemed_voucher;
      $redemmVoucher->voucher_id = $voucher->id;
      $redemmVoucher->redeem_date = $date1->format('Y-m-d');
      $redemmVoucher->code = $request->code;
      $redemmVoucher->user_id = $ownedVoucher->user_id;




      if ($redemmVoucher->save() && $ownedVoucher->delete()){
          return [
              'success' => true,
              'data' => "Redeemed voucher was saved with id: {$redemmVoucher->id}",
              'id' => $redemmVoucher->id
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
