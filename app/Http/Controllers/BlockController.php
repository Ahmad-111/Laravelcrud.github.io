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
        return view('Block.show_block',compact('blocks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $areas=Area::all();
        return view('Block.insert_block',['areas'=>$areas]);
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
              'area_name' => 'required',
              'block_name' => 'required|unique:blocks,block_name|regex:/^[a-zA-Z\s]*$/'
            ]
        );
        $block = new Block;
        $block->area_id = $request->area_name;
        $block->block_name = $request->block_name;
        $block->save();
        return redirect(route('block.index'));
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
        $areas=Area::all();
        return view('Block.update_block' , ['block'=> $block] , ['areas'=> $areas]);
        
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
        $request->validate(
            [
              'area_id' => 'required',
              'block_name' => 'required|regex:/^[a-zA-Z\s]*$/'
            ]
        );
         $block->update($request->all());
         return redirect(route('block.index'));
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
