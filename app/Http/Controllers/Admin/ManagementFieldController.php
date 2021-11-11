<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManagementFieldController extends Controller
{
    public function viewManagementField()
    {
        $title = "Booking Lapangan - Management Lapangan";

        return view('admin.management-field.view', compact('title'));
    }
}
