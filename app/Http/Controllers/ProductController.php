<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductModel;
use App\Models\ClientModel;
use App\Models\OrderModel;
use App\Models\CategoryModel;
use \Session;
use App\Models\User;
use Illuminate\Support\Facades\Notification;
use App\Notifications\Notice1;

class ProductController extends Controller
{
    public function insert(Request $request){
        $product=new ProductModel;
        $product->product_category=$request->product_category;
        $product->product_name=$request->product_name;
        $product->product_tag=$request->product_tag;
        $product->product_part=$request->product_part;
        $product->product_price=$request->product_price;
        $product->product_description=$request->product_description;
        $product->product_image=$request->product_image;
        
        if($file = $request->hasFile('product_image')) {
            $file = $request->file('product_image') ;
            $fileName = $file->getClientOriginalName() ;
            $destinationPath = public_path().'/images/' ;
            $file->move($destinationPath,$fileName);
            $product->product_image = '/images/'.$fileName ;
        }
        $product->save();
        return redirect()->back()->withSuccess('Product saved successfully');
    }


    public function show(){
        $product=ProductModel::orderBy('id', 'DESC')->paginate(50);
        return view('dashboard.product-admin')->with('product', $product);
        
    }

    public function show1(){
        $product=ProductModel::all();
        return view('welcome',['product'=>$product]);
    }


    public function display(Request $request, $id){
                 $product=ProductModel::all();
                $single_product=ProductModel::where('id', $id)->get();
                 return view('single_product', ['single_product' => $single_product, 'product'=>$product]);            
    }



    public function addToCart(Request $request, $id){
      
        $product=ProductModel::findOrFail($id);
        $cart=session()->get('cart', []);
    if(isset($cart)){
        $item_id=array_column($cart, 'id');
        if(!in_array($id, $item_id)){
            $item=array(
            'id' => $id,
            'product_image'=> $product->product_image,
            'name' => $product->product_name,
            'price' => $product->product_price,
            'quantity' =>$request->get('quantity')
            );
          $count=count($cart);
          $cart[$count]=$item;
        }else{
            echo "<script>alert('This item has already been added')</script>";
            echo "<script>window.location.href='/addToCart' </script>";
        }
    }else{
        $item=array(
            'id' => $id,
            'product_image'=> $product->product_image,
            'name' =>$product->product_name,
            'price' =>$product->product_price,
            'quantity' =>$request->get('quantity')
        );
        // $cart[0]=$item;
        // dd("progress");
    }

    session()->put('cart', $cart);
    session()->flash('success', 'Item added successfully');
    return view('addToCart', ['product' => $product]);

    }
    
    public function update_cart($id){
        $pr=ProductModel::where('id', $id)->first();
        echo $pr->id.'<br>';
        foreach(Session::get('cart') as $key=>$value){
            if($pr->id==$value['id']){
                session()->forget('cart.'.$key);
                break;
            }
        }
        return redirect('/addToCart');
    }


    public function client(Request $request){
        $data=new ClientModel;
        $data->title=$request->get('title');
        $data->fullname=$request->get('fullname');
        $data->country=$request->get('country');
        $data->state=$request->get('state');
        $data->city=$request->get('city');
        $data->street=$request->get('street');
        $data->bus_stop=$request->get('bus_stop');
        $data->phone_number=$request->get('phone_number');
        $data->email=$request->get('email');
        $data->save();
        // return redirect()->back()->withSuccess('Submitted successfully. Redirecting after 5 seconds for payment');
       $cart=session()->get('cart');
        foreach($cart as $data){
            $order=new OrderModel;
            $order->name=$data['name'];
            $order->price=$data['price'];
            $order->quantity=$data['quantity'];
            $order->save();
        }
        
    }
    
    public function editProduct($id){
        $product=ProductModel::all();
        return view('dashboard.product-admin-edit', ['product'=> $product]);
    }
    
    public function updateProduct(Request $request, $id){
        $product=ProductModel::where('id', $id)->update([
            'product_name'=>$request->product_name,
            'product_price'=>$request->product_price,
            'product_description'=>$request->product_description,
            'product_image' => $request->product_image
            ]);
        return redirect('/product-admin');
        
    }
    
    
         public function deleteView(){
            return view('dashboard.product-admin-delete');
    }
    
        public function deleteProduct($id){
            $product=ProductModel::find($id);
            $product->delete();
            return redirect('/product-admin');
    }
    
         public function delete_category($id){
            $product=CategoryModel::find($id);
            $product->delete();
            return redirect()->back()->with('delete', 'you have successfully deleted a category'); 
        }
    
        public function editCategory($id){
            $category=CategoryModel::where('id', $id)->get();
            return view('dashboard.category_edit', ['category'=> $category]);
        }
        
        public function updateCategory(Request $request, $id){
             $product=CategoryModel::where('id', $id)->update([
            'category_name'=>$request->category_name
            ]);
            return redirect('/category')->with('success', 'you have successfully updated a category');
        }
    
    public function orderReal(Request $request){
        $order=new OrderModel;
        // $order1=OrderModel::with('orderUser')->get();
            $cart=session()->get('cart');
            foreach($cart as $data){
                $order=new OrderModel;
                $order->name=$data['name'];
                $order->price=$data['price'];
                $order->quantity=$data['quantity'];
                $order->user_id=$request->get('user_id');
                $order->payment_status=$request->get('payment_status');
                $order->save();
            }
            $request->session()->forget('cart');
            
        }

    
    public function show3(){
    return view('search');
}

public function search3(Request $request){
    $input=$request->get('search');
    $product=ProductModel::where('product_name', 'like', $input.'__%')->orWhere('product_category', 'like', $input.'__%')->orWhere('product_tag', 'like', $input.'__%')->orWhere('product_part', 'like', $input.'__%')->get();
    return view('home-search', ['product' =>$product]);
}

    public function search1(){
        return view('dashboard.product-admin-search');
    }

    public function search2(Request $request){
        $input=$request->get('search');
        $product=ProductModel::where('product_name', 'like', $input .'__%')->orWhere('product_category', 'like', $input.'__%')->orWhere('product_tag', 'like', $input.'__%')->orWhere('product_part', 'like', $input.'__%')->get();
        return view('dashboard.product-admin-search', ['product'=> $product]);
    }

    public function updateReal($id){
        $products=ProductModel::find($id);
            if($products)
            {
                return response()->json([
                'status'=>200,
                'products' => $products
            ]);
        }else{
            return response()->json([
                'status'=>404,
                'message' => "error encountered"
            ]);
        }

}

        public function change(Request $request, $id){
            $product=ProductModel::where('id', $id)->update([
                'product_category'=>$request->product_category,
                'product_name'=>$request->product_name,
                'product_tag'=>$request->product_tag,
                'product_part'=>$request->product_part,
                'product_price'=>$request->product_price,
                'product_description'=>$request->product_description
                ]);
        }
        
        public function update_status(Request $request, $id){
        $order=OrderModel::where('id', $id)->update([
            'delivery_status'=>'delivered'
            ]);
        return redirect()->back();
        
    }
    
            public function upgrade(Request $request, $id){
            $user=User::where('id', $id)->update([
                'role'=>$request->role
                ]);
            return redirect()->back();
        }
        
}