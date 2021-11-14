<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $primaryKey = "id_order";

    protected $fillabe = [
        'order_id_user', 'order_id_field', 'time_of_booking', 'price_of_booking', 'payment_proof', 'payment_status'
    ];

    public function users(){
        return $this->belongsTo('App\Models\User', 'order_id_user');
    }

    public function fields(){
        return $this->belongsTo('App\Models\field', 'order_id_field');
    }
}
