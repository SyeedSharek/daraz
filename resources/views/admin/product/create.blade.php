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

                <h2><i class="halflings-icon edit"></i><span class="break"></span>Add Product</h2>

            </div>

            <div class="box-content">

                <form class="form-horizontal" action="{{'/products/'}}" method="post" enctype="multipart/form-data" >
                    @csrf
                    
                    <fieldset>

                        <div class="control-group">
                            <label class="control-label" for="date01">Product Code</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="code" required>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="date01">Product Name</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="name" required>
                            </div>
                        </div>


                        <div class="control-group">
                           <label class="control-label" for="cars">Choose Category:</label>
                           <div class="controls">
                            <select name="category" id="" style="margin-left: 20px">
                                <option value="">Select Category</option>
                                @foreach ($categories as $category )
                                                                  
                             <option value="{{ $category->id }}">{{ $category->name }}</option>
                             @endforeach
                            </select>
                           </div>
                                                                                                                                    
                        </div>

                        
                        <div class="control-group">
                            <label class="control-label" for="">Choose Sub Category:</label>
                            <div class="controls">
                             <select name="subcategory" id="" style="margin-left: 20px">
                                 <option value="">Select Category</option>
                                 @foreach ($subcategories as $subcategory )
                                                                   
                              <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
                              @endforeach
                             </select>
                            </div>
                                                                                                                                     
                         </div>

                         
                        <div class="control-group">
                            <label class="control-label" for="">Choose Brand:</label>
                            <div class="controls">
                             <select name="brand" id="" style="margin-left: 20px">
                                 <option value="">Select Category</option>
                                 @foreach ($brands as $brand )
                                                                   
                              <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                              @endforeach
                             </select>
                            </div>
                                                                                                                                     
                         </div>

                         
                        <div class="control-group">
                            <label class="control-label" for="">Choose Unit:</label>
                            <div class="controls">
                             <select name="unit" id="" style="margin-left: 20px">
                                 <option value="">Select Category</option>
                                 @foreach ($units as $unit )
                                                                   
                              <option value="{{ $unit->id }}">{{ $unit->name }}</option>
                              @endforeach
                             </select>
                            </div>
                                                                                                                                     
                         </div>

                         
                        <div class="control-group">
                            <label class="control-label" for="">Choose Size:</label>
                            <div class="controls">
                             <select name="size" id="" style="margin-left: 20px">
                                 <option value="">Select Category</option>
                                 @foreach ($sizes as $size )
                                                                   
                              <option value="{{ $size->id }}">{{ $size->size }}</option>
                              @endforeach
                             </select>
                            </div>
                                                                                                                                     
                         </div>

                         
                        <div class="control-group">
                            <label class="control-label" for="">Choose Color:</label>
                            <div class="controls">
                             <select name="color" id="" style="margin-left: 20px">
                                 <option value="">Select Category</option>
                                 @foreach ($colors as $color )
                                                                   
                              <option value="{{ $color->id }}">{{ $color->color }}</option>
                              @endforeach
                             </select>
                            </div>
                                                                                                                                     
                         </div>
 


                        <div class="control-group hidden-phone">
                            <label class="control-label" for="textarea2">Product Description</label>
                            <div class="controls">
                                <textarea class="cleditor" name="description" rows="3" required></textarea>
                            </div>

                        </div>

                        <div class="control-group">
                            <label class="control-label" for="date01">Product Price</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="price" required>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="date01">Discount</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="discount" required>
                            </div>
                        </div>

                         <div class="control-group">
                            <label class="control-label">File Upload</label>
                            <div class="controls">
                                <input type="file" name="image[]" multiple required>
                            </div>
                        </div>    

                        

                       


                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Add Product </button>
                            
                            
                        </div>
                    </fieldset>
                </form>

            </div>
        </div><!--/span-->
    </div><!--/row-->
    </div><!--/row-->

@endsection