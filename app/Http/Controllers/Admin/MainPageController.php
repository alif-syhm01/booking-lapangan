<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainPageController extends Controller
{
    public function viewMainPage()
    {
        $title = "Booking Lapangan - Management Halaman Utama";

        return view('admin.main-page.view', compact('title'));
    }
}
