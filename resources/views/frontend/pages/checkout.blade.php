@extends('frontend.master')
@section('contain')

<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-sm-2"></div>

            <div class="col-md-8">
                <!-- Billing Details -->
                <div class="billing-details">
                    <div class="section-title">
                        <h3 class="title">Shipping address</h3>
                     </div>
                     
                     <form action="{{ url('/shipping_save') }}" method="post">
                         @csrf
                       <div class="form-group">
                        <input class="input" type="text" name="name" placeholder="Full Name" required>
                      </div>
                   
                      <div class="form-group">
                        <input class="input" type="email" name="email" placeholder="Email" required>
                      </div>
                      <div class="form-group">
                        <input class="input" type="text" name="address" placeholder="Address" required>
                      </div>
                      <div class="form-group">
                        <input class="input" type="text" name="city" placeholder="City" required>
                      </div>
                      <div class="form-group">
                        <input class="input" type="text" name="country" placeholder="Country" required>
                      </div>
                      <div class="form-group">
                        <input class="input" type="text" name="zipcode" placeholder="ZIP Code" required>
                     </div>
                     <div class="form-group">
                        <input class="input" type="tel" name="mobile" placeholder="Telephone" required>
                      </div>

                      <div class="form-group">

                        <input type="submit" class="primary-btn order-submit" value="Next" style="float:right" />
                    </div>
                                        
                   
                     </form>
                   
                   </div>
                </div>
                <!-- /Billing Details -->
             <!-- /Order Details -->
           </div>
           <div class="col-sm-2"></div>
          <!-- /row -->
        </div>
      <!-- /container -->
     </div>
   <!-- /SECTION -->
               

@endsection