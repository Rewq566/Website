<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profiles;

class ProfilesController extends Controller
{
    public function showUsers()
    {
        $profiles = profiles::all(); 

        return view('users', ['profiles' => $profiles]);
    }
}
