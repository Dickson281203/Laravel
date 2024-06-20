<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    // note for adry : untuk controller edit di index ya karena view page editnya aku gabung sekaligus dengan page index profile 
    public function index()
    {
        return view('profile.index');
    }

    public function changepass()
    {
        return view('profile.changepass');
    }
}
