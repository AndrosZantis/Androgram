<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
  //users can never be trusted
      public function index($user)
        {
            $user = User::findOrFail($user);
            return view('profiles.index', [
                'user' => $user,

            ]);
        }
}
