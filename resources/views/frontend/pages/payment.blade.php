@extends('frontend.master')
@section('contain')
 <!-- Order Details -->
 <div class="col-md-4"></div>
 <div class="col-md-5 order-details" style="margin-top:100px; margin-button:50px">
    <div class="section-title text-center">
        <h3 class="title">Your Order</h3>
    </div>
    <div class="order-summary">
        <div class="order-col">
            <div><strong>PRODUCT</strong></div>
            <div><strong>TOTAL</strong></div>
        </div>

        @foreach ($cart_array as $cart )
            
       

        <div class="order-products">
            <div class="order-col">
                <div>{{ $cart['quantity'] }} {{ $cart['name'] }}</div>
                <div>{{ Cart::get($cart['id'])->getPriceSum() }}  	&#2547;</div>
            </div>
           
        </div>
        @endforeach
        <div class="order-col">
            <div>Shiping</div>
            <div><strong>50 &#2547;</strong></div>
        </div>
        <div class="order-col">
            <div><strong>TOTAL</strong></div>
            <div><strong class="order-total">{{ Cart::getTotal()+50 }} &#2547;</strong></div>
        </div>
    </div>
    

    <div class="section-tittle text-center" style="margin-top: 40px;">

        <h1 class="title" style="color: rgb(138, 5, 5)"> Please Select Place Order</h1>

    </div>

    <form action="{{ url('/order_place') }}" method="post">
        @csrf
    <div class="payment-method">
        <div class="input-radio">
            <input type="radio" name="payment" id="payment-1" value="cash">
            <label for="payment-1">
                <span></span>
                Cash On Delevary
            </label>
            <div class="caption">
                <p>You can payment after receive your parcle</p>
            </div>
        </div>
        <div class="input-radio">
            <input type="radio" name="payment" id="payment-2" value="bikash">
            <label for="payment-2">
                <span></span>
                Bikash
            </label>
            <div class="caption">
                <p>You can payment by this Bikash number 01832246775</p>
            </div>
        </div>
        <div class="input-radio">
            <input type="radio" name="payment" id="payment-3" value="nogot">
            <label for="payment-3">
                <span></span>
                Nogot
            </label>
            <div class="caption">
                <p>You can payment by this Nogot number 01832246775</p>
            </div>
        </div>
    </div>

    <div class="input-checkbox">
        <input type="checkbox" id="terms">
        <label for="terms">
            <span></span>
            I've read and accept the <a href="#">terms & conditions</a>
        </label>
    </div>
   <input type="submit" class="primary-btn order-submit" name="" value="Place Order" style="float: right">
</div>
</form>

<div class="col-md-4"></div>

<!-- /Order Details -->
</div>

<!-- /row -->
</div>
<!-- /container -->

</div>
<!-- /SECTION -->


@endsection