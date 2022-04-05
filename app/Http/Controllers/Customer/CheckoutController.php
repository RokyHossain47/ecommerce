<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function checkOut(){

        
        $data['sociallink'] = DB::table('social_tb')
        ->select('*')
        ->first();

        $data['appsetting'] = DB::table('appsetting_tb')
        ->select('*')
        ->first();

        $data['department'] = DB::table('category_tb')
        ->select('category_tb.*')
        ->get();
        
        return view('ecommerce/checkout',$data);
    }
}
