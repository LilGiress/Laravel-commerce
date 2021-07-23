<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    //
    public function home(){
        return view('client.home');
    }

    public function shop(){
        return view('client.shop');
    }

    public function paiement(){
        return view('client.paiement');
    }

    public function about(){
        return view('client.about');
    }

    public function contact(){
        return view ('client.contact');
    }

    public function blog(){
        return view('client.blog');
    }

    public function cart(){
        return view('client.cart');
    }


    public function product_single()
    {
        return view('client.product_single');
    }

    public function wishlist(){
        return view('client.wishlist');
    }

    public function checkout(){
        return view('client.checkout');
    }
}
