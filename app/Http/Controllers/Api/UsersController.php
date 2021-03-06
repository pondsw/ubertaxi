<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = \App\User::all();
        return [
            'success' => true,
            'data' => $users
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = \App\User::find($id);
        if (!is_null($user))
            return [
                'success' => true,
                'data' => $user
            ];
        return [
            'success' => false,
            'data' => 'User not found'
        ];
    }

    public function owned_vouchers($id)
    {
        $user = \App\User::find($id);
        if (!is_null($user)) {
            return [
                'success' => true,
                'data' => $user->owned_vouchers()->get()
            ];
        } else {
            return [
                'success' => false,
                'data' => 'User not found'
            ];
        }
    }

    public function redeemed_discounts($id)
    {
        $user = \App\User::find($id);
        if (!is_null($user)) {
            return [
                'success' => true,
                'data' => $user->redeemed_discounts()->get()
            ];
        } else {
            return [
                'success' => false,
                'data' => 'User not found'
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
