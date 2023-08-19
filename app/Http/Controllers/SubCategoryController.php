<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubCategory;
use App\Models\Category;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subcategories = SubCategory::all();
        return view('admin.subcategory.index',compact('subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.subcategory.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $subcategory = new SubCategory;
        $subcategory->id = $request->$subcategory;
        $subcategory->cat_id = $request->category;
        $subcategory->name = $request->name;
        $subcategory->description = $request->description;

        $subcategory->save();

        if($subcategory){
            return redirect()->back()->with('message','Successfully Added');
        }

    }

    public function change_status(SubCategory $subcategory)
    {
        if($subcategory->status==1){
            $subcategory->update(['status'=>0]);

        }
        else{

            $subcategory->update(['status'=>1]);
        }
        return redirect()->back()->with('message','Successfully Change');

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
    public function edit(Subcategory $subcategory )
    {
        $categories = Category::all();
        return view('admin.subcategory.edit',compact('categories','subcategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Subcategory $subcategory)
    {
        //dd($request->all());
        $update = $subcategory->update([

            'name'=>$request->name,
            'cat_id'=>$request->category,
            'description'=>$request->description,


        ]);

        if($update){
            return redirect('subcategories')->with('message','Update Successful');
        }

        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SubCategory $subcategory)
    {
        $delete = $subcategory->delete();
        if($delete){
            return redirect()->back();


        }
    }
}
