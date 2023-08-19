<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.category.index',compact('categories'));

        
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $category = new Category;
        $category->id = $request->category;
        $category->name = $request->name;
        $category->description = $request->description;
        $category->image = $request->image->store('category');
 



        //   if($request->hasfile('image')){
        //     $file = $request->file('image');
        //     $extension = $file->getClientOriginalExtension();
        //     $filename = time().'.'.$extension;
        //     $file->move('category',$filename);
        //     $category->image = $filename;

        // }

        $category->save();

        //dd( $category);

        return redirect()->back()->with('message','Successfully Add Category'); 

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
    public function edit(Category $category)
    {
        return view('admin.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $update = $category->update([

            'name'=>$request->name,
            'cat_id'=>$request->category,
            'description'=>$request->description,
            'image'=>$request->file('image')->store('category'),


        ]);

        if($update){
            return redirect('subcategories')->with('message','Update Successful');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $delete = $category->delete();
        if($delete){
            return redirect()->back();
        }
    }

    public function change_status(Category $category)
    {
        if($category->status==1){
            $category->update(['status'=>0]);
        }
        else{
            $category->update(['status'=>1]);
        }

        return redirect()->back()->with('message','Successfully Change');
    }
}
