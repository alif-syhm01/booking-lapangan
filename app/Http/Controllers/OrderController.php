<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Order;

class OrderController extends Controller
{
    public function viewOrder(){

    }

    public function addOrder(Request $order){
        $order_id_user = $order->order_id_user;
        $order_id_field = $order->order_id_field;
        $time_of_booking = $order->time_of_booking;
        $price_of_booking = $order->price_of_booking;
        $payment_proof = $order->payment_proof;
        $payment_status = $order->payment_status;

        // dd($order_id_user, $order_id_field, $time_of_booking, $price_of_booking, $payment_proof, $payment_status);

        $insertOrder = new Order();

        $insertOrder->order_id_user = $order_id_user;
        $insertOrder->order_id_field = $order_id_field;
        $insertOrder->time_of_booking = $time_of_booking;
        $insertOrder->price_of_booking = $price_of_booking;
        $insertOrder->payment_proof = $payment_proof;
        $insertOrder->payment_status = $payment_status;

        $insert = $insertOrder->save();

        if ($insert) {
            return response()->json([
                'success_massage' => "Data berhasil diinput kedalam database"
            ]);
        } else {
            return response()->json([
                'error_message' => "Cek kembali data yang ada"
            ]);
        }
    }

    public function editOrder(Request $update_order, $id_order)
    {
        $id_order = $id_order;
        $update_order_id_user = $update_order->order_id_user;
        $update_order_id_field = $update_order->order_id_field;
        $update_time_of_booking = $update_order->time_of_booking;
        $update_price_of_booking = $update_order->price_of_booking;
        $update_payment_proof = $update_order->payment_proof;
        $update_payment_status = $update_order->payment_status;

        //dd($update_order_id_user, $update_order_id_field, $update_time_of_booking, $update_price_of_booking, $update_payment_proof, $update_payment_status);
        $update_order = Order::where('id_order', $id_order)
                        ->update([
                            'order_id_user' => $update_order_id_user,
                            'order_id_field' => $update_order_id_field,
                            'time_of_booking' => $update_time_of_booking,
                            'price_of_booking' => $update_price_of_booking,
                            'payment_proof' => $update_payment_proof,
                            'payment_status' => $update_payment_status,
                        ]);

        if ($update_order) {
            return response()->json([
                'success_massage' => "Data berhasil diubah"
            ]);
        } else {
            return response()->json([
                'error_message' => "Cek kembali data yang ada"
            ]);
        }
    }

    public function deleteOrder($id_order)
    {
        $delete_data = Order::where('id_order', $id_order)->delete();

        if ($delete_data) {
            return response()->json([
                'success_massage' => "Data berhasil dihapus"
            ]);
        } else {
            return response()->json([
                'error_message' => "Cek kembali data yang ada"
            ]);
        }
    }
}
