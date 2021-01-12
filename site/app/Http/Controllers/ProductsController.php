<?php

namespace App\Http\Controllers;

use App\Cart;
use App\BuyNow;
use App\Cart_Products;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductsController extends Controller
{
    public function view($id)
    {
    $product=Product::find($id);
        $user=Auth::user();
    return view('products.view',['product'=>$product,'image'=>$product->Images,'user'=>$user->name]);

    }

    public function index($category_id)
    {

    }




    public function confirmBuy(Request $request ){

        $user=Auth::user();
        $buy=new BuyNow();

        $buy->product_name=$request->product_name;
        $buy->user_id=$user->id;
        $buy->quantity=$request->quantity;
        $buy->address=$request->address;
        $buy->save();

        return redirect()->back()->with('message', 'ORDER is DONE!');

    }





    public function add_to_cart($id){

       $cart= $this->create_cart();
       $count= Cart_Products::where('cart_id',$cart->id)->where('product_id',$id)->count();
        if ($count==0){
            $product_cart=new Cart_Products();
            $product_cart->cart_id=$cart->id;
            $product_cart->product_id=$id;
            $product_cart->save();
        }

        return redirect()->back()->with('message', 'IT WORKS!');

    }


public function create_cart(){
        $user=Auth::user();
        if($user->Cart instanceof Cart ){

            return $user->Cart;

        }else{
            $cart=new Cart();
            $cart->user_id=$user->id;
            $cart->save();
   return $cart;
        }


}


public function get_cart(){
        $user=Auth::user();
        $cart=$user->Cart;
        if ($cart instanceof Cart){
        $product_ids=Cart_Products::where('cart_id',$cart->id)->pluck('product_id');
         $products=Product::whereIn('id',$product_ids)->get();
return  view('cartPage',['products'=>$products]);



        }else{
            return redirect()->back();
        }


}

}
