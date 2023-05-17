<?php

namespace App\Http\Controllers;
use App\Models\Slot;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Appointment;

class SlotController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $slots = Slot::all();
  
        return view('slot.index',compact('slots'));
    }

    public function indexCust()
    {
        $slots = Slot::all();
  
        return view('slot.indexCust',compact('slots'));
    }

    public function store(Request $request){

        $slot = new Slot;
        $slot->start_time = Carbon::create($request->input('start'));
        $slot->end_time = Carbon::create($request->input('end'));
        $slot->description = $request->input('desc');
        $slot->status = 'A';
        $slot->created_by = auth()->user()->id;
        $slot->updated_by = auth()->user()->id;
        $slot->created_at = Carbon::now();
        $slot->updated_at = Carbon::now();
        $slot->save();
        
        return redirect()->back();

    }

    public function ActivateAndDeactivate($id,$stat){

        $slot = Slot::findOrFail($id);
        $slot->status = $stat;
        $slot->updated_by = auth()->user()->id;
        $slot->updated_at = Carbon::now();
        $slot->save();
        
        return redirect()->back();
    }

    public function update(Request $request){

        Slot::where('id',$request->input('id'))->update([
                'start_time' =>  Carbon::create($request->input('start_edit')),
                'end_time' =>  Carbon::create($request->input('end_edit')),
                'description' => $request->input('desc_edit'),
                'updated_by' => auth()->user()->id,
                'updated_at' => Carbon::now(),
        ]);


        return redirect()->back();

    }
}
