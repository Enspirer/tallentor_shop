<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Customer;
use App\User;
use App\Order;

class AuthorBackendController extends Controller
{
    public function index(Request $request)
    {

        // $sort_search = null;
        $authors = Author::orderBy('created_at', 'desc')->get();

        // dd($authors);

        
        // $sort_search = null;
        // $customers = Customer::orderBy('created_at', 'desc');
        // if ($request->has('search')){
        //     $sort_search = $request->search;
        //     $user_ids = User::where('user_type', 'customer')->where(function($user) use ($sort_search){
        //         $user->where('name', 'like', '%'.$sort_search.'%')->orWhere('email', 'like', '%'.$sort_search.'%');
        //     })->pluck('id')->toArray();
        //     $customers = $customers->where(function($customer) use ($user_ids){
        //         $customer->whereIn('user_id', $user_ids);
        //     });
        // }
        // $customers = $customers->paginate(15);

        // return view('backend.author.index',compact('customers', 'sort_search'));

        return view('backend.author.index',compact('authors'));
    }

}