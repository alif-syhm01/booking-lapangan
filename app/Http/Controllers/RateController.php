<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rate;

class RateController extends Controller
{
    public function viewRate()
    {
        # code...
    }

    public function addRate(Request $rate)
    {
        $rate_id_user = $rate->rate_id_user;
        $rate_id_field = $rate->rate_id_field;
        $rate_of_number = $rate->rate_of_number;
        $comments = $rate->comments;
        $created_by = $rate->created_by;
        $edited_by = $rate->edited_by;

        $insertrate = new Rate();

        $insertrate->rate_id_user = $rate_id_user;
        $insertrate->rate_id_field = $rate_id_field;
        $insertrate->rate_of_number = $rate_of_number;
        $insertrate->comments = $comments;
        $insertrate->created_by = $created_by;
        $insertrate->edited_by = $edited_by;

        $insert = $insertrate->save();

        if ($insert) {
            return response()->json([
                'success_message' => "Data berhasil diinput kedalam database"
            ]);
        } else {
            return response()->json([
                'error_message' => "Cek kembali data yang ada"
            ]);
        }
    }

    public function editRate(Request $update_rate, $id_rate)
    {
        $id_rate = $id_rate;
        $update_rate_id_user = $update_rate->rate_id_user;
        $update_rate_id_field = $update_rate->rate_id_field;
        $update_rate_of_number = $update_rate->rate_of_number;
        $update_comments = $update_rate->comments;
        $updated_by = $update_rate->edited_by;

        $update_rate = rate::find($id_rate);
        $update_rate = Rate::where('id_rate', $id_rate)
                    ->update([
                        'rate_id_user' => $update_rate_id_user,
                        'rate_id_field' => $update_rate_id_field,
                        'rate_of_number' => $update_rate_of_number,
                        'comments' => $update_comments,
                        'edited_by' => $updated_by,
                    ]);

        if ($update_rate) {
            return response()->json([
                'success_message' => "Data berhasil diubah"
            ]);
        } else {
            return response()->json([
                'error_message' => "Cek kembali data yang ada"
            ]);
        }
    }

    public function deleteRate($id_rate)
    {
        $delete_data = rate::where('id_rate', $id_rate)->delete();

        if ($delete_data) {
            return response()->json([
                'success_message' => "Data berhasil dihapus",
            ]);
        } else {
            return response()->json([
                'error_message' => "Cek kembali data yang ada"
            ]);
        }
    }
}
