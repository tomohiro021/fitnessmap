<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(Request $request) {
        return view('shop.index');
    }
    public function access(Request $request) {
        return view('shop.access');
    }
    public function price(Request $request) {
        return view('shop.price');
    }
    public function img(Request $request) {
        return view('shop.img');
    }
}
