<?php

namespace App\Http\Controllers;

use App\Models\Premise;
use Illuminate\Http\Request;

class PremiseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $premises = Premise::all();
        return view('premise.index',compact('premises'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('premise.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate
        ([
            'idc' => 'required|min:6|max:15',
            'ident' => 'required|min:2|max:15',
            'rut' => 'required|min:2|max:15',
            'patent' => 'required|min:2|max:15',
            'address' => 'required|min:3|max:100',
            'email' => 'min:3|max:50',
            'phone' => 'min:8|max:32'
        ]);
        
        $premise = Premise::create($request->all());
        return redirect()->route('premise.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Premise $premise)
    {
        //
        return view('premise.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Premise $premise)
    {
        //
        return view('premise.edit', compact('premise'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Premise $premise)
    {
        //
        $request->validate
        ([
            'idc' => 'required|min:6|max:15',
            'ident' => 'required|min:6|max:15',
            'rut' => 'required|min:6|max:15',
            'patent' => 'required|min:6|max:15',
            'address' => 'required|min:3|max:100',
            'email' => 'min:3|max:50',
            'phone' => 'min:8|max:32'
        ]);
        $premise->update($request->all());
        return redirect()->route('premise.edit', $premise);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Premise $premise)
    {
        //
        $premise->delete();
        return redirect()->route('premise.index');
    }
}
