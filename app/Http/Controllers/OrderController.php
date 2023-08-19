<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Support\Carbon;


class OrderController extends Controller
{
        public function index(){

         $order_datas = Order::all();
      

           return view('admin.order.ordershow',compact('order_datas'));


        }


      
      public function view_details($id){

        $orders = Order::where('orders.id',$id)->first();
        $orders_by_id = OrderDetail::where('order_id',$id)->get();



        return view('admin.order.order_view_details',compact('orders','orders_by_id'));

      }
}
