<?php

namespace App\Http\Controllers;
use App\Models\Machine;

use Carbon\Carbon;

use Illuminate\Http\Request;

class QRMachineController extends Controller
{
    //
    public function createqr(Machine $machine)
    {
        //
        return view('machine.createqr', compact('machine'));
    }

    public function activatemachine(Machine $machine)
    {
        //
        $machine = Machine::find($machine->id);
        
        $machine->active_status = '1';
        $machine->activation_date = Carbon::now()->format('Y-m-d');
        $machine->payment_date = Carbon::now()->addMonth()->format('Y-m-d');
        $machine->save();

        return redirect()->route('machine.index');
    }
}
