<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Service;
use App\Http\Requests\Admin\ServiceRequest;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $services = Service::all();
        return view('admin.services.services', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ServiceRequest $request)
    {
        if($request->hasFile('image')) {

            $filename = time().$request->image->getClientOriginalName();
            $request->image->storeAs('/', $filename);
        }
            $service = new Service;
            $service->name = $request->name;
            $service->image = $filename;
            $service->body = $request->body;
            $service->save();

            return redirect()->route('services.index')->with('service',  'Service Added Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::find($id);
        return view('admin.services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ServiceRequest $request, $id)
    {
        $service =  Service::find($id);
        if($request->hasFile('image')) {

            $filename = time().$request->image->getClientOriginalName();
            $request->image->storeAs('/', $filename);
        } else {
            $filename = $service->image;
        }
            $service->name = $request->name;
            $service->image = $filename;
            $service->body = $request->body;
            $service->save();

            return redirect()->route('services.index')->with('service',  'Service updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $service = Service::find($id);
        $service->delete();

        $image_path = public_path().'/upload/'.$service->image;
        unlink($image_path);


        return back()->with('delete', '1 Record has been deleted');
    }
}
