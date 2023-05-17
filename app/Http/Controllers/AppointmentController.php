<?php

namespace App\Http\Controllers;
use App\Models\Appointment;
use App\Models\Car;
use App\Models\Service;
use App\Models\User;
use Carbon\Carbon;
use DB;
use App\Models\Slot;

use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $appointments = Appointment::all();

        return view('appointment.index',compact('appointments'));
    }

    public function indexadmin()
    {

        $car = Car::pluck('model', 'id');
        $service = Service::pluck('serviceName', 'id');
        $appointments = Appointment::all();
        $slots = Slot::where('status','A')->get();


  
        return view('appointment.indexadmin',compact('car','service','appointments','slots'));
    }

     /**
     * buat appointment
     */
    public function create()
    {
        $car = Car::pluck('model', 'id');
        $service = Service::pluck('serviceName', 'id');
        $appointments = Appointment::all();
        $slots = Slot::where('status','A')->get();
        $totalslot = Slot::where('status','A')->count();

        return view('appointment.create', compact('car','service','appointments','slots','totalslot'));
    }

    public function getAppointment()
    {
        $data = DB::table('appointments')
        ->select('appointments.id','appointments.start_datetime','appointments.end_datetime','cars.model')
        ->leftJoin('cars', 'appointments.car_id', '=', 'cars.id')
        ->get();

        return response()->json($data);
    }

    public function getAppointmentDetails(Request $request)
    {
        $data = Appointment::select('*')
        ->whereDate('start_datetime',$request->date)
        ->whereTime('start_datetime',$request->time)
        ->leftJoin('users', 'appointments.user_id', '=', 'users.id')
        ->first();

        return response()->json($data);
    }

    public function verifyAppointmentAvailability(Request $request)
    {
        $totalappointment = Appointment::whereDate('start_datetime',$request->date)->count();
        $slots = Appointment::whereDate('start_datetime',$request->date)->get();

        return response()
        ->json(['totalappointment' => $totalappointment,'slots' => $slots]);
    }


    /**
     * simpan data appointment
     */
    public function store(Request $request)
    {

        $slots = Slot::where('status','A')->where('id',$request->input('slot'))->first();

      
        $getdate = $request->input('appdate');

      
        $start_datetime = Carbon::parse($slots->start_time.' '.$getdate);

        $end_datetime =  Carbon::parse($slots->end_time.' '.$getdate);


        $appointment = new Appointment;

        $appointment->user_id = auth()->user()->id;
        $appointment->car_id = $request->input('car_id');
        $appointment->service_id = $request->input('service_id');
        $appointment->slot_id =  $request->input('slot');
        $appointment->start_datetime = $start_datetime;
        $appointment->end_datetime =  $end_datetime;
        $appointment->mileage =  $request->input('mileage');
        $appointment->carColour =  $request->input('carColour');
        $appointment->numberPlate =  $request->input('numberPlate');
        $appointment->save();

        return redirect()->back()->with('success','Appointment created successfully.');
    }

    public function getAppointmentList()
    {

        $appointment = Appointment::has('user')->where('user_id',auth()->user()->id)->get(); 
        return view('appointment.customer.list',compact('appointment'));

    }

    public function getSlotTitle(Request $request)
    {
        $app = Appointment::where('id',$request->id)->first();

        $data = \Carbon\Carbon::parse($app->start_datetime)->format('h:i A') .' - '. \Carbon\Carbon::parse($app->end_datetime)->format('h:i A');

        return response()->json($data);
    }

     /**
     * show detail car baru
     */
    public function show(Appointment $appointment)
    {
        return view('appointment.show',compact('appointment'));
    }

    public function showadmin(Appointment $appointment)
    {
        return view('appointment.showadmin',compact('appointment'));
    }

     /**
     * edit pasal car
     */
    public function edit(Appointment $appointment)
    {
        return view('appointment.edit',compact('appointment'));
    }

     /**
     * masukkan updated info dlm database
     */
    public function update(Request $request, Appointment $appointment)
    {
        $request->validate([
            'time' => 'required',
        ]);
  
        $appointment->update($request->all());
  
        return redirect()->route('appointment.index')
                        ->with('success','appointment updated successfully');
    }

     /**
     * Delete car
     */
    public function destroy(Appointment $appointment)
    {
        $appointment->delete();

       return redirect()->route('appointment.index')
       ->with('success','appointment deleted successfully');
    }

    public function delete(Request $request)
    {
   $app = Appointment::
    whereDate('start_datetime',Carbon::createFromFormat('d/m/Y', $request->date)->format('Y-m-d'))
    ->whereTime('start_datetime',$request->time)
    ->delete();

    

    return response()->json(['success' =>'appointment deleted successfully' ]);
    }

}
