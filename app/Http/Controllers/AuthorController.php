<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use App\Models\MyBooks;
use App\Product;
use App\Upload;

class AuthorController extends Controller
{
    public function create_author()
    {

        return view('frontend.user.author.author_create');
    }

    public function store_author(Request $request)
    {
        $author = new Author;
        $author->author_name = $request->author_name;
        $author->author_description = $request->description;
        $author->user_id = auth()->user()->id;
        $author->profile_picture = $request->profile_image;
        $author->cover_photo = $request->cover_photo;
        $author->email = $request->email;
        $author->contact_number = $request->phone_number;
        $author->status = 'Pending';
        $author->facebook_link = '';
        $author->twitter_link = '';
        $author->slug = '883Drjjsel';
        $author->save();
        flash(translate('Author has been inserted successfully'))->success();
        return redirect()->route('dashboard');
    }

    public function update_author(Request $request)
    {
        Author::where('id',$request->id)->update([
           'author_name' => $request->author_name,
           'author_description' => $request->description,
           'user_id' => auth()->user()->id,
           'profile_picture' => $request->profile_image,
           'cover_photo' => $request->cover_photo,
           'contact_number' => $request->phone_number,
           'email' => $request->email,
           'facebook_link' => $request->facebook_link,
           'twitter_link' => $request->twitter_link
        ]);
        flash(translate('Author Settings Saved'))->success();
        return back();
    }

    public function author_settings()
    {
        $auathorDetails = Author::where('user_id',auth()->user()->id)->first();
        return view('frontend.user.author.author_settings',[
            'author_details' => $auathorDetails
        ]);
    }

    public function author_writings()
    {
        return view('frontend.user.author.author_writings');
    }


// *****************************************  My Book start ******************************************

    public function my_books(Request $request)
    {

        $author_details = Author::where('user_id',auth()->user()->id)->first();
        
        $sort_search = null;
        $my_books = MyBooks::where('author_id',$author_details->id)->orderBy('order', 'desc');

        if ($request->search != null){

            // dd($request->search);
            
            $sort_search = $request->search;
            $my_books = $my_books->where('book_title', 'like', '%'.$sort_search.'%')->where('author_id',$author_details->id);

            // dd($my_books);
            
        }        
        // dd($my_books);
        $my_books = $my_books->paginate(15);

        return view('frontend.user.author.my_bookings',compact('my_books','sort_search','author_details'));
    }

    public function create(Request $request)
    {        
        return view('frontend.user.author.my_bookings_create');
    }

    public function store(Request $request)
    {    
        // dd($request);

        $author_details = Author::where('user_id',auth()->user()->id)->first();

        $add = new MyBooks;

        $add->book_title = $request->title;
        $add->book_description = $request->description;
        $add->search_store_link = $request->search_store_link;       
        $add->status = 'Pending';
        $add->order = $request->order;
        $add->author_id = $author_details->id;
        $add->book_image = $request->book_image; 
        
        $add->save();

        flash(translate('Added Successfully'))->success();
        return redirect()->route('my_books');
    }

    public function edit($id)
    {
        $my_books = MyBooks::find($id);
        
        return view('frontend.user.author.my_bookings_edit', compact('my_books'));
    }

    public function update(Request $request, $id)
    {    
        // dd($request);

        $author_details = Author::where('user_id',auth()->user()->id)->first();
        
        $update = MyBooks::find($id);

        $update->book_title = $request->title;
        $update->book_description = $request->description;
        $update->search_store_link = $request->search_store_link;       
        $update->status = 'Pending';
        $update->order = $request->order;
        $update->author_id = $author_details->id;
        $update->book_image = $request->book_image;
        
        $update->save();

        flash(translate('Updated Successfully'))->success();
        return redirect()->route('my_books');
    }

    public function destroy($id)
    {
        $my_books = MyBooks::findOrFail($id);
        $my_books->delete();

        MyBooks::destroy($id);

        flash(translate('Deleted Successfully'))->success();
        return back();
    }

// *****************************************  My Book End ******************************************



    public function author_page($id) {

        $author = Author::where('id', $id)->first();

        $my_books = MyBooks::where('author_id', $id)->orderBy('id', 'desc')->get();


        return view('frontend.author_page', ['author' => $author, 'my_books' => $my_books]);
    }

    public function author_page_my_books($id) {
        
        $my_books = MyBooks::where('id', $id)->first();

        $upload = Upload::where('id', $my_books->book_image)->first();

        $arr = [
            'book_image' => url('').'/'.$upload->file_name,
            'book_title' => $my_books->book_title,
            'book_description' => $my_books->book_description,
            'search_store_link' => $my_books->search_store_link
        ];

        $array = json_encode($arr);

        return $array;
    }
}
