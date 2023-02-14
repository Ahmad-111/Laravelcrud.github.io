<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Block;
use App\Models\Area;

class BlockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blocks = Block::all();
        return view('/Block/showBlock',compact('blocks'));

        // $blocks = Block::with('area')->get();
        // $areas = Area::with('block')->get();
        // return view('showBlock',compact('blocks','areas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $areas=Area::all();
        return view('/Block/insertBlock',['areas'=>$areas]);
        //return view('insertBlock',compact('areas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Block::create($request->all());
        $block = new Block;
        $block->area_id = $request->area_name;
        $block->block_name = $request->block_name;
        $block->save();
        return redirect(route('block.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $block = Block::find($id);
        return view('/Block/editBlock',['block'=>$block]);
        //$block = Block::where('id', $id)->first();
        //return view('editBlock',compact('block'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Block $block)
    {
        $block->update($request->all());
        return redirect(route('block.index'));
        // $block = Block::where('id',$id)->first();
        // $block->block_name = $request->block_name;
        // $block->update();
       //$block->update($request->all())::where('block_id',$id);
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $block = Block::find($id);
        $block->delete();
        return redirect(route('block.index'));
    }
}
