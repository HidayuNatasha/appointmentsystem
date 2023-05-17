<?php

namespace App\Http\Controllers;
use App\Models\Service;
use App\Models\Admin;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

     /**
     * List service
     */
    public function index()
    {
        $service = Service::all();
  
        return view('service.index',compact('service'));
    }

    public function indexCust()
    {
        $service = Service::all();
  
        return view('service.indexCust',compact('service'));
    }

        /**
     * tambah service baru
     */
    public function create()
    {
        return view('service.create');
    }

     /**
     * Store info pasal new service
     */
    public function store(Request $request)
    {      

            $userId = auth()->user()->id;

            Service::create ([
            'user_id'=>$userId,
            'serviceName'=>request('serviceName'),
            'price'=>request('price'),
            'description'=>request('description'),
        ]);

        return redirect()->route('service.index')
        ->with('success','Service successfully added.');
                        
    }

     /**
     * show detail service baru
     */
    public function show(Service $service)
    {
        return view('service.show',compact('service'));
    }

     /**
     * edit pasal service
     */
    public function edit(Service $service)
    {
        return view('service.edit',compact('service'));
    }

     /**
     * masukkan updated info dlm database
     */
    public function update(Request $request, Service $service)
    {
        $request->validate([
            'serviceName' => 'required',
        ]);
  
        $service->update($request->all());
  
        return redirect()->route('service.index')
                        ->with('success','Service updated successfully');
    }

     /**
     * Delete service
     */
    public function destroy(Service $service)
    {
        $service->delete();

       return redirect()->route('service.index')
       ->with('success','Service deleted successfully');
    }

}
