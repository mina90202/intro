<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Porfolio;

class PorfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $porfolios = Porfolio::all();
        return view('admin.porfolio.index', compact('porfolios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.porfolio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile('image')) {

            $filename = time().$request->image->getClientOriginalName();
            $request->image->storeAs('/', $filename);
        }
            $porfolio = new Porfolio;
            $porfolio->category = $request->category;
            $porfolio->image = $filename;
            $porfolio->save();

            return redirect()->route('porfolios.index')->with('porfolio',  'Porfolio Added Successfully');
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
        $porfolio = Porfolio::find($id);
        return view('admin.porfolio.edit', compact('porfolio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $porfolio =  Porfolio::find($id);
        if($request->hasFile('image')) {

            $filename = time().$request->image->getClientOriginalName();
            $request->image->storeAs('/', $filename);
        } else {
            $filename = $porfolio->image;
        }
            $porfolio->category = $request->category;
            $porfolio->image = $filename;
            $porfolio->save();

            return redirect()->route('porfolios.index')->with('porfolio',  'Porfolio updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $porfolio = Porfolio::find($id);
        $porfolio->delete();

        $image_path = public_path().'/upload/'.$porfolio->image;
        unlink($image_path);


        return back()->with('delete', '1 Record has been deleted');
    }
}
