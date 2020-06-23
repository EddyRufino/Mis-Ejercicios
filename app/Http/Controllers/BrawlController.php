<?php

namespace App\Http\Controllers;

use App\User;
use App\Brawl;
use Illuminate\Http\Request;
use App\Http\resources\UserCollection;
use App\Http\resources\BrawlCollection;

class BrawlController extends Controller
{

    public function index(Request $request)
    {
        // $users = User::all();

        // if ($request->wantsJson()) {
        //     return new UserCollection($users);
        // }
        $brawls = Brawl::all();
        
        if ($request->wantsJson()) {
            return new BrawlCollection($brawls);
        }

        return view('brawls.index', compact('brawls'));
    }

    public function store(Request $request)
    {
        // request()->validate(['color' => 'required']);

    	$brawls = Brawl::create([
    		'color' => request('color')
    	]);

    	return response()->json(['color' => $brawls->color]);
    }

    public function update(Request $request, $id)
    {
        // $brawls = Brawl::find($id)->update($request->all());
        $brawls = Brawl::whereId($id)->update($request->all());

        return response()->json(['id' => $brawls]);
        // if ($request->wantsJson()) {
        //     return new BrawlCollection($brawls);
        // }

        // return view('brawls.index', compact('brawls'));
    }
}
