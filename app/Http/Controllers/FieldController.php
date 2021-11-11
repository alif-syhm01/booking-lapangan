<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Field;

class FieldController extends Controller
{
    public function viewField()
    {
        # code...
    }

    public function addField(Request $field)
    {
        $field_name = $field->field_name;
        $field_type = $field->field_type;
        $price = $field->price;
        $image = $field->image;
        $created_by = $field->created_by;
        $edited_by = $field->edited_by;

        $insertField = new Field();

        $insertField->field_name = $field_name;
        $insertField->field_type = $field_type;
        $insertField->price = $price;
        $insertField->image = $image;
        $insertField->created_by = $created_by;
        $insertField->edited_by = $edited_by;

        $insert = $insertField->save();

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

    public function editField(Request $update_field, $id_field)
    {
        $id_field = $id_field;
        $update_field_name = $update_field->field_name;
        $update_field_type = $update_field->field_type;
        $update_price = $update_field->price;
        $update_image = $update_field->image;
        $updated_by = $update_field->edited_by;

        // $update_field = Field::find($id_field);
        $update_field = Field::where('id_fields', $id_field)
                    ->update([
                        'field_name' => $update_field_name,
                        'field_type' => $update_field_type,
                        'price' => $update_price,
                        'image' => $update_image,
                        'edited_by' => $updated_by,
                    ]);

        if ($update_field) {
            return response()->json([
                'success_message' => "Data berhasil diubah"
            ]);
        } else {
            return response()->json([
                'error_message' => "Cek kembali data yang ada"
            ]);
        }
    }

    public function deleteField($id_field)
    {
        $delete_data = Field::where('id_fields', $id_field)->delete();

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
