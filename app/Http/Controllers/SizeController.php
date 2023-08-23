<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Size;

class SizeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sizes = Size::all();
        return view('admin.size.index',compact('sizes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.size.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $sizes = explode(',',$request->size);
        $size = new size();
        $size->size = json_encode($sizes);
        
        $size->save();
        return redirect()->back()->with('message','SuccessFully Size Add');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Size $size)
    {
        $delete = $size->delete();
        if($delete){
            return redirect()->back()->with('message','Successfully Change');
        }
    }

    public function change_status(Size $size){

        if($size->status==1){
            $size->update(['status'=>0]);
        }
        else{
            $size->update(['status'=>1]);
        }
        
        return redirect()->back()->with('message','Successfully Change');
        
    }
}