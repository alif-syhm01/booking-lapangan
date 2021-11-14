<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Field;
use App\Models\Order;
use App\Models\Rate;
use App\Models\User;

class TestController extends Controller
{
    public function callUser(){
        $get_user = User::all();

        return response()->json([
            'user' => $get_user
        ]);
    }

    public function callField(){
        $get_field = Field::all();

        return response()->json([
            'field' => $get_field
        ]);
    }

    public function callRate(){
        $get_rate = Rate::all();

        $get_relationship = Rate::select('id_rate', 'rate_id_user', 'rate_id_field', 'rate_of_number', 'comments')
                            ->with(['users' => function ($query){
                                $query->select('id_user', 'name');
                            }])
                            ->with(['fields' => function ($query){
                                $query->select('id_fields');
                            }])
                            ->get();

        return response()->json([
            'rate' => $get_rate,
            'relationship' => $get_relationship
        ]);
    }

    public function callOrder(){
        $get_order = Order::all();

        $get_rel = Order::select('id_order', 'order_id_user', 'order_id_field', 'time_of_booking', 'price_of_booking', 'payment_proof', 'payment_status')
                            ->with(['users' => function($query){
                                $query->select('id_user');
                            }])
                            ->with(['fields' => function($query){
                                $query->select('id_fields');
                            }])
                            ->get();

        return response()->json([
            'order' => $get_order,
            'rel' => $get_rel
        ]);
    }
    
}
