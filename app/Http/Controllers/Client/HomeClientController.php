<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;

class HomeClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('client.index');
    }
}
