<?php

namespace App\Http\Controllers;

use App\Http\resources\UserCollection;
use Illuminate\Http\Request;
use App\User; 
use Session;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $users = User::all();

        if ($request->wantsJson()) {
            return new UserCollection($users);
        }

        return view('brawls.index', compact('brawls'));
    }
}
