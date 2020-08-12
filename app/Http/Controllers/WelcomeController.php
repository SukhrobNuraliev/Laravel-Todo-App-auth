<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $todos = Todo::all();

        return view('welcome')->with(['todos' => $todos]);
    }
}
