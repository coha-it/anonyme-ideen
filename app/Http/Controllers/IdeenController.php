<?php

namespace App\Http\Controllers;

use App\User;

class IdeenController extends Controller
{
    /**
     * Retrieve the user for the given ID.
     *
     * @param  int  $id
     * @return Response
     */
    public function index()
    {
        return view('index');
    }
}
