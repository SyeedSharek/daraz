<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Unit;
use App\Models\Size;
use App\Models\Color;
use App\Models\Brand;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
      
        
        return view('admin.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $subcategories = SubCategory::all();
        $brands = Brand::all();
        $units = Unit::all();
        $sizes = Size::all();
        $colors = color::all();
        return view('admin.product.create',compact('categories','subcategories','brands','units','sizes','colors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = new Product;
        $product->id = $request->product;
        $product->code =$request->code;
        $product->name = $request->name;
        $product->cat_id = $request->category;
        $product->subcat_id = $request->subcategory;
        $product->br_id = $request->brand;
        $product->unit_id = $request->unit;
        $product->size_id = $request->size;
        $product->color_id = $request->color;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->discount = $request->discount;

          
        $image = array();
            if($files = $request->file('image')){
            
            
                $i = 0;
               foreach($files as $file){

                $name = $file->getClientOriginalName();
                $fileNameExtract = explode('.',$name);
                $fileName=$fileNameExtract[0];
                $fileName.=time();
                $fileName.=$i;
                $fileName.='.';
                $fileName.=$fileNameExtract[1];
               // $file->store('product_image');
               $file->move('product_image',$fileName);
                $image[]=$fileName;
                $i++;
              
                 }

             ($product['image']=implode("|",$image));
             $product->save();

             //dd($product);
              return redirect()->back()->with('message','Successfully Added');    
                }      
    
          else{
                 echo"ERROR";


              }

       }   
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    public function change_status (Product $product){
        if($product->status==1){
            $product->update(['status'=>0]);
        }
        else{
            $product->update(['status'=>1]);
        }

        return redirect()->back()->with('message','Status Change');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        $subcategories = SubCategory::all();
        $brands = Brand::all();
        $units = Unit::all();
        $sizes = Size::all();
        $colors = color::all();
        return view('admin.product.edit',compact('categories','subcategories','brands','units','sizes','colors','product'));

        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $update = $product->update([
            'code'=>$request->code,
            'name'=>$request->name,
            'cat_id'=>$request->category,
            'subcat_id'=>$request->subcategory,
            'br_id'=>$request->brand,
            'unit_id'=>$request->unit,
            'size_id'=>$request->size,
            'color_id'=>$request->color,
            'description'=>$request->description,
            'price'=>$request->price,
            'discount'=>$request->discount,

            
            
        ]);
        $image = array();
            if($files = $request->file('image')){
            
            
                $i = 0;
               foreach($files as $file){

                $name = $file->getClientOriginalName();
                $fileNameExtract = explode('.',$name);
                $fileName=$fileNameExtract[0];
                $fileName.=time();
                $fileName.=$i;
                $fileName.='.';
                $fileName.=$fileNameExtract[1];
               // $file->store('product_image');
               $file->move('product_image',$fileName);
                $image[]=$fileName;
                $i++;
              
                 }
                 ($product['image']=implode("|",$image));

                 return redirect('/products')->with('message','Update Successfull');
                }

      // dd($update);

         else{
            "ERROR";
         }


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $delete = $product->delete();
        if($delete){
            return redirect()->back()->with('message','Delete Successful');
        }

    }
}
