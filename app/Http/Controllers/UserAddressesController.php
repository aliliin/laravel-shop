<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAddressesController extends Controller
{
    //获取当前用户的所有地址
    public function index(Request $request){

        return view('user_addresses.index', [
            'addresses' => $request->user()->addresses,
        ]);
    }
}
