<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class reserviring extends Controller
{
    public function index()
    {
        $reservirings = DB::table('reserviring')->get();
        return view('reserviring')->with('data', $reservirings);
    }

    public function create()
    {

    }

    public function store()
    {


    }
}
