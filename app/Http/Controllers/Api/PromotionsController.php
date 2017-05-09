<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PromotionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $promotions = \App\Promotion::all();
        // $discounts = \App\Discount::all();
        return [
            'success' => true,
            'data' => $promotions
            // 'code' => $discounts
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
        $promotion = new \App\Promotion;
        $promotion->name = trim($request->name);
        $promotion->detail = trim($request->detail);
        $promotion->start_date = $request->start_date;
        $promotion->exp_date = $request->exp_date;
        $promotion->image_path = $request->image_path;

        if (!empty($promotion->name) && !empty($promotion->detail) && $promotion->save()){
            return [
                'success' => true,
                'data' => "Promotion '{$promotion->name}' was created",
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
        $promotion = \App\Promotion::find($id);
        if (!is_null($promotion))
            return [
                'success' => true,
                'data' => $promotion
            ];
        return [
            'success' => false,
            'data' => 'Promotion not found'
        ];
    }

    public function discount($id)
    {
        $promotion = \App\Promotion::find($id);
        // $discount = \App\Discount::find($id);
        if (!is_null($promotion)) {
            return [
                'success' => true,
                'data' => $promotion->discount()->get()
                // 'code' => $discount->discount()->get()
            ];
        } else {
            return [
                'success' => false,
                'data' => 'Promotion not found'
                // 'code' => 'Code not found'
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
