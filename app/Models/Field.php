<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    use HasFactory;

    protected $primaryKey = "id_fields";

    protected $fillable = [
        'field_name', 'field_type', 'price', 'image', 'created_by', 'edited_by'
    ];

    public function rates()
    {
        return $this->hasMany('App\Models\Rate');
    }

    public function orders(){
        return $this->hasMany('App\Models\Order');
    }
}