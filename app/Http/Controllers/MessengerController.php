<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class MessengerController extends Controller
{
    //
    function index() : View {
        return view('messenger.index');
    }
}
