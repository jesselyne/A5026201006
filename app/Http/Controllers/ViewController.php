<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    //
    function showFormETS()
    {
        return view('ets');
    }

    function tugasPHP()
    {
        return view('multiplication');
    }

    function acceptMultiplication()
    {
        return view('accmultiplication');
    }

    function showForm()
    {
        return view('showgreetings');
    }

    function resultGreetings()
    {
        return view('tugas');
    }
}
