
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

                <h2><i class="halflings-icon edit"></i><span class="break"></span>Add Size</h2>

            </div>


            <div class="box-content">

                <form class="form-horizontal" action="{{url('/sizes/')}}" method="post" enctype="multipart/form-data" >
                    @csrf
                    
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label" for="date01">Color Name</label>
                            <div class="controls">
                                <input type="text" name="size" data-role="tagsinput" placeholder="Add tags" required />
                            </div>
                         </div>
                       


                         <div class="">
                            <input type="submit" value="Add Size" >
                        </div> 
                    </fieldset>
                </form>


            
   




@endsection