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

    public function edit($id)
    {
        $author = Author::find($id);
        // $blog_categories = BlogCategory::all();
        
        return view('backend.author.edit', compact('author'));
    }

    public function update(Request $request, $id)
    {    
        // dd($request);
        // dd($id);

        // $request->validate([
        //     'category_id' => 'required',
        //     'title' => 'required|max:255',
        // ]);

        $add = Author::find($id);

        $add->author_name = $request->name;
        $add->author_description = $request->description;
        $add->slug = $request->slug;
        // $add->slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->slug));
        $add->contact_number = $request->contact_number;
        $add->email = $request->email;        
        $add->status = $request->status;
        
        $add->save();

        flash(translate('Author Details has been updated successfully'))->success();
        return redirect()->route('admin.author');
        // return back();
    }

    public function destroy($id)
    {

        // dd($id);
        $author = Author::findOrFail($id);
        $author->delete();

        Author::destroy($id);

        flash(translate('Author has been deleted successfully'))->success();
        return back();
    }

}