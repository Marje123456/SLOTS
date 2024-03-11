<?php

namespace App\Http\Controllers;

use App\Models\Machine;
use Illuminate\Http\Request;

class MachineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $machines = Machine::all();
        return view('machine.index',compact('machines'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('machine.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate
        ([
            'premise_ident' => 'required|min:2|max:15',
            'code' => 'required|min:2|max:15',
            'model' => 'required|min:2|max:15',
            'brand' => 'required|min:2|max:15',
            'seriale' => 'required|min:3|max:100'
        ]);
        
        $machine = Machine::create($request->all());
        return redirect()->route('machine.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Machine $machine)
    {
        //
        return view('machine.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Machine $machine)
    {
        //
        return view('machine.edit', compact('machine'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Machine $machine)
    {
        //
        $request->validate
        ([
            'premise_ident' => 'required|min:2|max:15',
            'code' => 'required|min:2|max:15',
            'model' => 'required|min:2|max:15',
            'brand' => 'required|min:2|max:15',
            'seriale' => 'required|min:3|max:100'
        ]);

        $machine->update($request->all());
        return redirect()->route('$machine.edit', $machine);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Machine $machine)
    {
        //
        $machine->delete();
        return redirect()->route('$machine.index');
    }
}
