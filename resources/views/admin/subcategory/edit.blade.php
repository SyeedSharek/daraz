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

                <h2><i class="halflings-icon edit"></i><span class="break"></span>Edit Sub Category</h2>

            </div>

            <div class="box-content">

                <form class="form-horizontal" action="{{ url('/subcategories/'.$subcategory->id) }}" method="post" enctype="multipart/form-data" >
                    @csrf
                    @method('PUT')
                    
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label" for="date01">Sub Category Name</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" name="name" value="{{ $subcategory->name }}" required>
                            </div>
                        </div>
                        
                        <div class="control-group">
                            <label class="control-label" for="cars">Choose Category:</label>
                            <div class="controls">
                             <select name="category" id="" style="margin-left: 20px">
                                
                                 {{-- <option value="">{{ $subcategory->category->name }}</option> --}}
                                 
                                 @foreach ($categories as $category )
                                                                   
                              <option value="{{ $category->id }}" {{ $subcategory->cat_id==$category->id ? 'selected':''}}>{{ $category->name}}</option>

                              @endforeach
                             </select>
                            </div>
                                                                                                                                     
                         </div>


                        <div class="control-group hidden-phone">
                            <label class="control-label" for="textarea2">Category Description</label>
                            <div class="controls">
                                <textarea class="cleditor" name="description" rows="3"  required>{{ $subcategory->description }}</textarea>
                            </div>

                        </div>

                    

                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Edit Sub Category</button>
                        </div>
                    </fieldset>
                </form>

            </div>
        </div><!--/span-->
    </div><!--/row-->
    </div><!--/row-->
@endsection