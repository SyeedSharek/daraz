@extends('admin.admin_master')
@section('admin_contain')

 @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif 


    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
               
                <p class="alert-success">
                    <?php
                    $message = Session::get('message');
                    if ($message) {
                        echo $message;
                        Session::put('message',null);
                    }
                                 
                    
                    ?>
    
                </p>

                <h2><i class="halflings-icon edit"></i><span class="break"></span>Edit Product</h2>

            </div>

            <div class="box-content">

                <form class="form-horizontal" action="{{ url('/products/'.$product->id) }}" method="post" enctype="multipart/form-data" >
                    @csrf
                    @method('PUT')
                    
                    <fieldset>

                        <div class="control-group">
                            <label class="control-label" for="date01"  >Product Code</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="code" value={{ $product->code }} required>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="date01">Product Name</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="name" value={{ $product->name }} required>
                            </div>
                        </div>


                        <div class="control-group">
                            <label class="control-label" for="cars">Choose Category:</label>
                            <div class="controls">
                             <select name="category" id="" style="margin-left: 20px">
                                
                                 {{-- <option value="">{{ $subcategory->category->name }}</option> --}}
                                 
                                 @foreach ($categories as $category )
                                                                   
                              <option value="{{ $category->id }}"{{ $product->cat_id==$category->id ? 'selected':''}}>{{ $category->name}}</option>

                              @endforeach
                             </select>
                            </div>
                                                                                                                                     
                         </div>

                        
                        <div class="control-group">
                            <label class="control-label" for="">Choose Sub Category:</label>
                            <div class="controls">
                             <select name="subcategory" id="" style="margin-left: 20px">
                        
                                 @foreach ($subcategories as $subcategory )
                                                                   
                              <option value="{{ $subcategory->id }}"{{ $product->subcat_id==$subcategory->id ? 'selected':'' }}>{{ $subcategory->name }}</option>
                              @endforeach
                             </select>
                            </div>
                                                                                                                                     
                         </div>

                         
                        <div class="control-group">
                            <label class="control-label" for="">Choose Brand:</label>
                            <div class="controls">
                             <select name="brand" id="" style="margin-left: 20px">
                                
                                 @foreach ($brands as $brand )
                                                                   
                              <option value="{{ $brand->id }}"{{ $product->br_id==$brand->id ? 'selected':'' }}>{{ $brand->name }}</option>
                              @endforeach
                             </select>
                            </div>
                                                                                                                                     
                         </div>

                         
                        <div class="control-group">
                            <label class="control-label" for="">Choose Unit:</label>
                            <div class="controls">
                             <select name="unit" id="" style="margin-left: 20px">
                               
                                 @foreach ($units as $unit )
                                                                   
                              <option value="{{ $unit->id }}"{{ $product->unit_id==$unit->id ? 'selected':''}}>{{ $unit->name }}</option>
                              @endforeach
                             </select>
                            </div>
                                                                                                                                     
                         </div>

                         
                        <div class="control-group">
                            <label class="control-label" for="">Choose Size:</label>
                            <div class="controls">
                             <select name="size" id="" style="margin-left: 20px">
                                
                                 @foreach ($sizes as $size )
                                                                   
                              <option value="{{ $size->id }}"{{ $product->size_id==$size->id ? 'selected':'' }}>{{ $size->size }}</option>
                              @endforeach
                             </select>
                            </div>
                                                                                                                                     
                         </div>

                         
                        <div class="control-group">
                            <label class="control-label" for="">Choose Color:</label>
                            <div class="controls">
                             <select name="color" id="" style="margin-left: 20px">
                                
                                 @foreach ($colors as $color )
                                                                   
                              <option value="{{ $color->id }}"{{ $product->color_id==$color->id ? 'selected':'' }}>{{ $color->color }}</option>
                              @endforeach
                             </select>
                            </div>
                                                                                                                                     
                         </div>
 


                        <div class="control-group hidden-phone">
                            <label class="control-label" for="textarea2">Product Description</label>
                            <div class="controls">
                                <textarea class="cleditor" name="description" rows="3" value="" required>{!!$product->description!!}</textarea>
                            </div>

                        </div>

                        <div class="control-group">
                            <label class="control-label" for="date01">Product Price</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="price" value="{{$product->price  }}" required>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="date01">Discount</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="discount" value="{{$product->discount  }}" required>
                            </div>
                        </div>


                         <div class="control-group">
                            <label class="control-label">File Upload</label>
                          
                                                            
                            <div class="controls">
                                <input  type="file" name="image[]"   multiple >
                            </div>

                           
                        </div>    

                        

                       


                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Edit Product </button>
                            
                            
                        </div>
                    </fieldset>
                </form>

            </div>
        </div><!--/span-->
    </div><!--/row-->
    </div><!--/row-->

@endsection