<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    use HasFactory;

    protected $primaryKey = "id_rate";

    protected $fillable = [
        'rate_id_user', 'rate_id_field', 'rate_of_number', 'comments', 'created_by', 'edited_by'
    ];

    public function users()
    {
        return $this->belongsTo('App\Models\User', 'rate_id_user');
    }

    public function fields()
    {
        return $this->belongsTo('App\Models\Field', 'rate_id_field');
    }
}
