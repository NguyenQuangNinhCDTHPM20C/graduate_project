<?php

namespace App\Http\Controllers;

use App\Models\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $color = Color::get();
        return view('Admin.pages.color.color-list', compact('color'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.pages.color.add-color');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $color = new Color;
    
        $color->name = $request->input('name');
        $color->save();
        return redirect()->route('color.list')->with('success', 'Category has been added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Color $color)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $color = Color::findOrFail($id);
        return view('Admin.pages.color.edit-color', compact( 'color'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\color  $color
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $color = Color::findOrFail($id);
        $color->name = $request->input('name');
        $color->save();
        return redirect()->route('color.list')->with('success', 'Category updateed successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\color  $color
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {    

        $color = Color::findOrFail($id);
        $color->delete();
        return redirect()->route('color.list')->with('Category has been deleted successfully');
    }
}
