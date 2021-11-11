<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardAdminController extends Controller
{
    public function viewAdmin()
    {
        $title = "Booking Lapangan - Admin Page";

        return view('admin.view', compact('title'));
    }
}
