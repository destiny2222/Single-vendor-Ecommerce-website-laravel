<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\CartItem;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class PageController extends Controller
{
    //
    public function home()
    {
        if (!Auth::check()) {
            $user = Auth::user();
        } else {
            $user = Auth::user()->id;
        }


        $categories = SubCategory::all();
        $cart_item_count = CartItem::where('user_id', $user)->count();
        $wishlist_item_count = Wishlist::where('user_id', $user)->count();
        return view('frontend.index', [
            'categories' => $categories,
            'cart_item_count' => $cart_item_count,
            'wishlist_item_count' => $wishlist_item_count
        ]);
    }




    public function ItemDetails($subcategory_id)
    {
        if (!Auth::check()) {
            $user = Auth::user();
        } else {
            $user = Auth::user()->id;
        }

        $categories = Category::all();
        $subcategory = Subcategory::where('slug', $subcategory_id)->firstOrFail();
        $products = Product::where('subcategory_id', $subcategory->id)->get();
        $cart_item_count = CartItem::where('user_id', $user)->count();
        $wishlist_item_count = Wishlist::where('user_id', $user)->count();

        return view('frontend.product', [
            'products' => $products,
            'categories' => $categories,
            'cart_item_count' => $cart_item_count,
            'wishlist_item_count' => $wishlist_item_count,
        ]);
    }

    public function shop()
    {
        if (!Auth::check()) {
            $user = Auth::user();
        } else {
            $user = Auth::user()->id;
        }


        $categories = Category::all();
        $products = Product::orderBy('id', 'desc')->get();
        $subcategories = SubCategory::with('products')->get();

        // counting the numbers od times subcategory is used by a product
        $count = 0;
        foreach ($subcategories as $subcategory) {
            $count += $subcategory->products->count();
        }




        $cart_item_count = CartItem::where('user_id', $user)->count();
        $wishlist_item_count = Wishlist::where('user_id', $user)->count();
        return view('frontend.shop', [
            'cart_item_count' => $cart_item_count,
            'wishlist_item_count' => $wishlist_item_count,
            'categories' => $categories,
            'subcategories' => $subcategories,
            'products' => $products,
            'count'=>$count,
        ]);
    }

    public function ProductDetails(Product  $product)
    {
        if (!Auth::check()) {
            $user = Auth::user();
        } else {
            $user = Auth::user()->id;
        }


        $categories = Category::all();
        $cart_item_count = CartItem::where('user_id', $user)->count();
        $wishlist_item_count = Wishlist::where('user_id', $user)->count();
        return view('frontend.product-detail',[
            'product'=>$product,
            'categories'=>$categories,
            'cart_item_count'=>$cart_item_count,
            'wishlist_item_count'=>$wishlist_item_count,
        ]);
    }
}
