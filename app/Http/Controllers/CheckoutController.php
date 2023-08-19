<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shipping;
use App\Models\Payment;
use App\Models\Customer;
use App\Models\Order;
use DB;
use Cart;
use Session;

class CheckoutController extends Controller
{
    public function index(){

        $customer_id = Customer::where('id',Session::get('id'))->first();

        return view('frontend.pages.checkout',compact('customer_id'));
    }

    public function check_login(){
        
        return view('frontend.pages.login');
    }

    public function shiping_details(Request $request){
        
       $data['id']=$request->id;
       $data['name']=$request->name;
       $data['email']=$request->email;
       $data['address']=$request->address;
       $data['city']=$request->city;
       $data['country']=$request->country;
       $data['zipcode']=$request->zipcode;
       $data['mobile']=$request->mobile;

       $s_id = Shipping::insertGetId($data);
       Session::put('sid',$s_id);
       
        
      return redirect('payment');
        
    
    }

    public function payment_product(){

        $cartCollection = Cart::getContent();
        $cart_array = $cartCollection->toArray();

        return view('frontend.pages.payment',compact('cart_array'));
    }

    public function order_pay(Request $request){

       // For Payment Table................

        $payment_method = $request->payment;

        $p_data = array();
        $p_data['payment_method'] = $payment_method;
        $p_data['status']= 'panding';

        $payment_id = Payment::insertGetId($p_data);


       //For Order Table.............

        $odata = array();
        $odata['cus_id'] = Session::get('id');
        $odata['ship_id'] = Session::get('sid');
        $odata['pay_id'] = $payment_id;
        $odata['total']= Cart::getTotal();
        $odata['status']= 'panding';

        $order_id = Order::insertGetId($odata);


        //For Order Details Table........

        $cartCollection = Cart::getContent();

        foreach ($cartCollection as $cartContent) {
            
            $od_datails = array();
            $od_datails['order_id']= $order_id;
            $od_datails['product_id'] = $cartContent->id;
            $od_datails['product_name'] = $cartContent->name;
            $od_datails['product_price'] = $cartContent->price;
            $od_datails['product_sales_quantity'] = $cartContent->quantity;

            DB::table('order_details')->insert($od_datails); 


        }

        if($payment_method=='cash'){
            Cart::clear();
            return view('frontend.pages.payment_method');

        }
        elseif($payment_method=='bikash'){
            Cart::clear();
            return view('frontend.pages.payment_method');

        }

        elseif($payment_method=='nogot'){

            Cart::clear();
            return view('frontend.pages.payment_method');

        }



        



        



    }


}
