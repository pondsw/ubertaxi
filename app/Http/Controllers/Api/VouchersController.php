<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VouchersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vouchers = \App\Voucher::all();
        return [
            'success' => true,
            'data' => $vouchers
        ];
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
        $vouchers = new \App\Voucher;
        $vouchers->point = trim($request->point);
        $vouchers->detail = trim($request->detail);
        $vouchers->exp_date = $request->exp_date;
        $vouchers->limit_number_of_use = $request->limit_number_of_use;
        

        if (!empty($vouchers->point) && !empty($vouchers->detail) && !empty($vouchers->exp_date) && $vouchers->save()){
            return [
                'success' => true,
                'data' => "Voucher was saved with id: {$vouchers->id}",
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
        $vouchers = \App\Voucher::find($id);
        if (!is_null($vouchers))
            return [
                'success' => true,
                'data' => $vouchers
            ];
        return [
            'success' => false,
            'data' => 'Voucher not found'
        ];
    }

    public function owned_vouchers($id)
    {
        $vouchers = \App\Voucher::find($id);
        if (!is_null($vouchers)) {
            return [
                'success' => true,
                'data' => $vouchers->owned_vouchers()->get()
            ];
        } else {
            return [
                'success' => false,
                'data' => 'Voucher not found'
            ];
        }
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
