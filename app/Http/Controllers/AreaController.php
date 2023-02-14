<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area; 

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $areas = Area::all();
        return view('/Area/showArea',['areas'=>$areas]);
        //return view('showArea',compact('areas'));
        //return view('insert');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/Area/insertArea');
        // $area = new Area;
        // $area->area_name = $request->name;
        // $area->save();
        // return redirect(route('index'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
              'area_name' => 'required'
            ]
        );

        Area::create($request->all());
         return redirect(route('area.index'));
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
        $area = Area :: find($id);
        return view('/Area/editArea',['area'=>$area]);
        //return view('editArea',compact('area'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, area $area)
    {
        $area->update($request->all());
        return redirect(route('area.index'));
        // $area = Area :: find($id);
        // $area->area_name = $request->name;
        // $area->save();
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $area = Area :: find($id);
        $area->delete();
        return redirect(route('area.index'));
    }
}
