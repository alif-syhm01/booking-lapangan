<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManagementBookingController extends Controller
{
    public function viewManagementBooking()
    {
        $title = "Booking Lapangan - Manajemen Pemesanan";

        return view('admin.management-booking.view', compact('title'));
    }
}
