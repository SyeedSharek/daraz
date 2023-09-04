@extends('admin.admin_master')
@section('admin_contain')

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
           
            <h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
              <thead>
                  <tr>
                      {{-- <th style="width:2%">Sl</th> --}}
                       <th style="width:5%">Product Code</th>
                       <th style="width:5%">Product Name</th>
                       <th style="width:5%">Category</th>
                       <th style="width:5%">Sub Category</th>
                      <th style="width:5%">Brand</th>
                      <th style="width:5%">Unit</th>
                      <th style="width:4%">Size</th>
                      <th style="width:4%">Color</th>
                      <th style="width:12%">Description</th>
                      <th style="width:5%">Product Price</th>
                      <th style="width:5%">Discount</th>
                      <th style="width:19%">Image</th>


                      <th style="width:4%">Status</th>
                      <th style="width:15%">Actions</th>
                  </tr>
              </thead> 
              {{-- @foreach ($products as $key =>  $product ) --}}

              @foreach ($products as $product )

                  @php
                  $product['image'] = explode("|",$product->image);
                  $images = $product['image'];
                   @endphp
                  
               
                   <tbody>
                  <tr>
                    {{-- <td>{{$key+1  }}</td> --}}
                    <td class="center">{{$product->code }}</td>
                    <td class="center">{{ $product->name }}</td>
                    <td class="center">{{ $product->category->name }}</td>
                    <td class="center">{{ $product->subcategory->name }}</td>
                    <td class="center">{{ $product->brand->name }}</td>
                    <td class="center">{{ $product->unit->name }}</td>
                    <td class="center">{{ $product->size->size }}</td>
                    <td class="center">{{ $product->color->color }}</td>
                    <td class="center">{!!$product->description !!}</td>
                    <td class="center">{{ $product->price }}</td>
                    <td class="center">{{ $product->discount }}</td>

                    <td>
                      @foreach ($images as $image)
                          
                      
                        
                        <img style="height: 50px; width= 50px;" src="{{asset('/product_image/'.$image)}}" alt="" >
                        
                        @endforeach
                    </td>
                    



                   
                 
                    
                    <td class="center">
                        @if ($product->status==1)
                            
                       <span class="label label-success">Active</span>
                       @else
                       <span class="label label-danger">Deactive</span>
                       @endif

                    </td>

                    <td class="row">
                        <div class="span3"></div>

                                                   
                         <div class="span2">
                             @if ($product->status==1)

                         <a href="{{ url('/product_status').$product->id }}" class="btn btn-success" >
                            <i class="halflings-icon white thumbs-down"></i> 
                            
                         </a>
                        
                         @else
                         <a href="{{ url('/product_status').$product->id }}" class="btn btn-danger" >
                            <i class="halflings-icon white thumbs-up"></i> 
                           
                         </a>
                            @endif
                        </div>
                      

                        <div class="span2">

                         <a href="{{url('/products/'.$product->id.'/edit') }}" class="btn btn-info" >
                            <i class="halflings-icon white edit"></i>  
                         </a>

                        </div>

                        <div class="span2">
                            <form action="{{ url('/products/'.$product->id )}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit"> <i class="halflings-icon white trash"></i> </button>
                                                                            
                            </form>

                        </div>
                       </td>
                      </tr>
               
                    </tbody>
              @endforeach 
          </table>            
        </div>
     </div><!--/span-->

    </div><!--/row-->
 
@endsection