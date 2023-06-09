<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\CartItem;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('check.user');
    }

    public function index(){

        $wishlist = Wishlist::orderBy('id', 'desc')->get();
        return view('frontend.wishlist', compact( 'wishlist'));
    }
        public function addProduct(Request $request)
    {
        $product_id = $request->input('product_id');
        $user_id = Auth::user()->id;


        $wishlist = Wishlist::where('user_id', $user_id)->where('product_id', $product_id)->first();
        if ($wishlist) {
            return response()->json(['info' => 'Product already in wishlist']);
        }
        if (!$wishlist) {
            $wishlist = new Wishlist();
            $wishlist->user_id = $user_id;
            $wishlist->product_id = $product_id;
            $wishlist->save();
        }

        return redirect()->route('wishlist.index')->with('success', 'Product added to Wishlist Successfull');
    }

    public function removeProduct(Request $request)
    {
        $user = Auth::user();
        $product_id = $request->input('product_id');
        Wishlist::where('user_id', $user->id)->where('product_id', $product_id)->delete();

        return redirect()->route('wishlist.index')->with('success', 'Wishlist Deleted Successfull');;
    }

}
