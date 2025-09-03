<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        return view('cart.index'); // pastikan file resources/views/cart/index.blade.php ada
    }
}
