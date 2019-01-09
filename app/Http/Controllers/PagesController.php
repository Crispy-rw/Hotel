<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function admin()
    {
        return view('pages.admin');
    }

    public function hotel_owner()
    {
        return view('pages.hotel_owner');
    }

    public function client()
    {
        return view('client.client');
    }
}
