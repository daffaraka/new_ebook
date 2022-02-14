<?php

namespace App\Http\Controllers;

use App\Models\Ebook;
use App\Models\Gender;
use App\Models\Order;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EBookController extends Controller
{
   
    public function index()
    {

        $data = EBook::all();
      
        return view('ebook.book-home', ['data'=>$data]);
    }

    
    public function create()
    {
        return view('ebook.book-add');
    }

 
    public function store(Request $request)
    {
        $input = $request->all();


        Ebook::create($input);

        return redirect()->route('ebook.index');
    }

   
    public function show($id)
    {
        $ebook = Ebook::find($id);

        return view('ebook.book-details', ['ebook'=>$ebook]);
    }

    
    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        $ebook = Ebook::find($id);

        $ebook->delete();

        return redirect()->route('ebook.index');
    }


    public function cart()
    {
        
        $cart = Order::where('account_id',Auth::user()->account_id)->where('order_status','pending')->get();
        $ebookId = Order::pluck('ebook_id')->first();
        $ebookName =  Ebook::where('ebook_id',$ebookId)->pluck('title')->first();
       
        return view('cart.cart',['cart'=>$cart, 'ebookName'=>$ebookName]);
    }
    
    public function addToCart($id)
    {
        
        $ebook = new Ebook;
        $ebookData = $ebook->find($id);
        $order = new Order;

        $orderData = [];
        $orderData['account_id'] = Auth::user()->account_id;
        $orderData['ebook_id'] = $ebookData->ebook_id;
        $orderData['order_status'] = 'pending';
        
        Order::create($orderData);

        
        return redirect()->route('cart');
    }

    public function checkout($id)
    {
        $cart = Order::find($id);

        return redirect()->route('cart');
    }

    public function deleteCart($id)
    {
        $cart = Order::find($id);
        $cart->delete();

        return redirect()->route('cart');
    }

    public function editProfile($id)
    {
        $account = User::find($id);
        return view('admin.maintenance',['account'=>$account]);
    }
}
