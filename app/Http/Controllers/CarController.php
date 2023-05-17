<?php

namespace App\Http\Controllers;
use App\Models\Car;
use App\Models\Customer;
use DB;

use Illuminate\Http\Request;

class CarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

     /**
     * List car
     */
    public function index()
    {
        $car = Car::all();
  
        return view('car.index',compact('car'));
    }

    public function indexCust()
    {
        $car = Car::all();
  
        return view('car.indexCust',compact('car'));
    }

        /**
     * tambah car baru
     */
    public function create()
    {
        return view('car.create');
    }

     /**
     * Store info pasal new car
     */
    public function store(Request $request)
    {      

            $userId = auth()->user()->id;

            Car::create ([
            'user_id'=>$userId,
            'brand'=>request('brand'),
            'model'=>request('model'),

        ]);

        return redirect()->route('car.index')
        ->with('success','Car successfully added.');
                        
    }

     /**
     * show detail car baru
     */
    public function show(Car $car)
    {
        //$car=Car::find($id);
        //$service=new Service::find($id);
        return view('car.show',compact('car'));
    }

     /**
     * edit pasal car
     */
    public function edit(Car $car)
    {
        return view('car.edit',compact('car'));
    }

     /**
     * masukkan updated info dlm database
     */
    public function update(Request $request, Car $car)
    {
        $request->validate([
            'brand' => 'required',
        ]);
  
        $car->update($request->all());
  
        return redirect()->route('car.index')
                        ->with('success','Car updated successfully');
    }

     /**
     * Delete car
     */
    public function destroy(Car $car)
    {
        $car->delete();

       return redirect()->route('car.index')
       ->with('success','Car deleted successfully');
    }

}
