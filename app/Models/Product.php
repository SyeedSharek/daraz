<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['id','code','name','cat_id','subcat_id','br_id','unit_id','size_id','color_id','price','description','discount','image','status'];

    public function category(){
        return $this->belongsTo(Category::class,'cat_id');
    }

    public function subcategory(){
        return $this->belongsTo(SubCategory::class,'subcat_id');
    }

    public function brand(){
        return $this->belongsTo(Brand::class,'br_id');
    }

    public function unit(){
        return $this->belongsTo(Unit::class,'unit_id');
    }

    public function size(){
        return $this->belongsTo(Size::class,'size_id');
    }
    public function color(){
        return $this->belongsTo(Color::class,'color_id');
    }

    public static function catProductCount($cat_id){
        $catCount = Product::where('cat_id',$cat_id)->where('status',1)->count();
        return $catCount;

    } 

    public static function subCatProductCount($subcat_id){
        $subCatCount = Product::where('subcat_id',$subcat_id)->where('status',1)->count();
        return $subCatCount;

    } 

    public static function brandProductCount($br_id){
        $brandCount = Product::where('br_id',$br_id)->count();
        return $brandCount;

    } 
}
