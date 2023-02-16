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
        return view('Area.show_area',['areas'=>$areas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Area.insert_area');
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
              'area_name' => 'required|unique:areas,area_name|regex:/^[a-zA-Z\s]*$/'
            ]
        );

        Area::create($request->all());
         return redirect(route('area.index'));
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
        return view('Area.update_area',['area'=>$area]);
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
        $request->validate(
            [
              'area_name' => 'required|unique:areas,area_name|regex:/^[a-zA-Z\s]*$/'
            ]
        );
        $area->update($request->all());
        return redirect(route('area.index'));    
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
