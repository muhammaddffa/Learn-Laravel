<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guest;

class GuestsController extends Controller
{
    //

    function index()
    {
        $guests = Guest::all();
        return view('guest/index');
    }



}
