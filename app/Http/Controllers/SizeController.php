<?php

namespace App\Http\Controllers;
use App\Models\Size;

use Illuminate\Http\Request;

class SizeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sizes= Size::orderby('created_at','DESC')->get();
        // dd($category);
        return view('sizes.index',compact('sizes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sizes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();
        $this->validate($request,[
            'size' => 'required|min:1|max:15|unique:sizes'
        ]);

        $sizes = new Size();
        $sizes->size = $request->size;
        if($sizes->save()){
            flash('Size Successfully saved')->success();
            return back();
        }
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
                // dd($id);
                $sizes = Size::findOrFail($id);
                return view('sizes.edit',compact('sizes'));
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
        $this->validate($request,[
            'size' => 'required|min:1|max:15|unique:sizes,size,'.$id
        ]);

        $sizes = Size::findOrFail($id);
        $sizes->size = $request->size;
        if($sizes->save()){
            flash('Size Successfully updated')->success();
            return redirect()->route('sizes.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sizes = Size::findOrFail($id);

            if($sizes->delete()){
            flash('Size Successfully deleted')->success();
            return redirect()->route('sizes.index');
        }
    }
}
