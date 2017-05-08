<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DateTime;

class OwnedVoucherController extends Controller
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
      $ownvoucher = new \App\Owned_voucher;
      $ownvoucher->voucher_id = $request->voucher_id;
      $ownvoucher->user_id = $request->user_id;
      // $mytime = Carbon\Carbon::now();
      $now = new DateTime();
      $dataCode = $request->voucher_id.$request->user_id.$now->getTimestamp();
      $hashCode = hash('adler32', $dataCode, false);
      $ownvoucher->code = $hashCode;

      $user = \App\User::find($request->user_id);
      $vouchers = \App\Voucher::find($request->voucher_id);

      $totalpoint = $user->point - $vouchers->point;
      if( $totalpoint <0 ){
        return [
            'success' => false,
            'data' => "Points are not enough."
        ];
      }
      $user->point = $totalpoint;
      if ($ownvoucher->save() && $user->save()){
          return [
              'success' => true,
              'data' => "Owned voucher was saved with id: $ownvoucher->id",
              'id' => $ownvoucher->id,
              'resual' => $totalpoint
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
        $voucher = \App\Owned_voucher::find($id);
        if (!is_null($voucher))
            return [
                'success' => true,
                'data' => $voucher
            ];
        return [
            'success' => false,
            'data' => 'Owned voucher not found'
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
