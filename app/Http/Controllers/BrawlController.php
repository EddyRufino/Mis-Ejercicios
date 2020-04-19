<?php

namespace App\Http\Controllers;

use App\Brawl;
use Illuminate\Http\Request;
use App\Http\resources\BrawlCollection;

class BrawlController extends Controller
{

    public function index(Request $request)
    {
        $brawls = Brawl::all();
        
        if ($request->wantsJson()) {
            return new BrawlCollection($brawls);
        }

        return view('brawls.index', compact('brawls'));
    }
}
