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

    public function update(Request $request, $id)
    {
        // $brawls = Brawl::find($id)->update($request->all());
        $users = User::whereId($id)->update($request->all());

        return response()->json(['id' => $users]);;
        // if ($request->wantsJson()) {
        //     return new BrawlCollection($brawls);
        // }

        // return view('brawls.index', compact('brawls'));
    }
}
