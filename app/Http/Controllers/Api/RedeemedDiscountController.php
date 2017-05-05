<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RedeemedDiscountController extends Controller
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
      $discount = new \App\Redeemed_discount;
      $discount->discount_id = $request->discount_id;
      $discount->user_id = $request->user_id;
      $discount->redeem_date = date("Y-m-d");

      if ($discount->save()){
          return [
              'success' => true,
              'data' => "Redeemed discount was saved with id: {$discount->id}",
              'id' => $discount->id
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
        $discount = \App\Redeemed_discount::find($id);
        if (!is_null($discount))
            return [
                'success' => true,
                'data' => $discount
            ];
        return [
            'success' => false,
            'data' => 'Redeemed discount not found'
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
