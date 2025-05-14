<?php

namespace App\Http\Controllers;

use App\Models\Fighter;
use Illuminate\Http\Request;

class FighterController extends Controller
{
    public function index()
    {
        $fighters = Fighter::all();
        return view('fighters.index', compact('fighters'));
    }

    public function create()
    {
        return view('fighters.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'weight_class' => 'required',
            'country' => 'required',
        ]);

        Fighter::create($request->all());

        return redirect()->route('fighters.index');
    }
}
