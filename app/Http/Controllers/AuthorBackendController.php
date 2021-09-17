<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\MyBooks;
use App\Models\MyWritings;
use App\User;

class AuthorBackendController extends Controller
{
    public function index(Request $request)
    {

        $sort_search = null;
        $authors = Author::orderBy('id', 'desc')->where('status','!=','Pending');

        if ($request->search != null){

            $sort_search = $request->search;
            $authors = $authors->where('author_name', 'like', '%'.$sort_search.'%')->where('status','!=','Pending');
        }        

        $authors = $authors->paginate(15);

        return view('backend.author.index',compact('authors','sort_search'));
    }

    public function create(Request $request)
    {
        $users = User::orderBy('id','DESC')->get();        

        return view('backend.author.create',compact('users'));
    }

    public function store(Request $request)
    {
        // dd($request);
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $pin = mt_rand(1000000, 9999999)
            . mt_rand(1000000, 9999999)
            . $characters[rand(0, strlen($characters) - 1)];
        $string = str_shuffle($pin);
        $slug_final = $request->slug.'-'.$string;      


        $author = new Author;
        $author->author_name = $request->name;
        $author->author_description = $request->description;
        $author->user_id = $request->user_id;
        $author->profile_picture = $request->profile_picture;
        $author->cover_photo = $request->cover_photo;
        $author->email = $request->email;
        $author->contact_number = $request->contact_number;
        $author->status = 'Approved';
        $author->facebook_link = $request->facebook_link;
        $author->twitter_link = $request->twitter_link;
        $author->slug = $slug_final;        

        $author->save();
        flash(translate('Author has been created successfully'))->success();
        return redirect()->route('admin.author');
    }

    public function edit($id)
    {
        $author = Author::find($id);
        
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

        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $pin = mt_rand(1000000, 9999999)
            . mt_rand(1000000, 9999999)
            . $characters[rand(0, strlen($characters) - 1)];
        $string = str_shuffle($pin);
        $slug_final = $request->slug.'-'.$string;  

        $add = Author::find($id);

        $add->author_name = $request->name;
        $add->author_description = $request->description;
        $add->slug = $request->slug;
        // $add->slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->slug));
        $add->slug = $slug_final;
        $add->contact_number = $request->contact_number;
        $add->email = $request->email; 
        $add->status = $request->status;
        $add->facebook_link = $request->facebook_link;       
        $add->twitter_link = $request->twitter_link;
        $add->profile_picture = $request->profile_picture;
        $add->cover_photo = $request->cover_photo;
        
        $add->save();

        flash(translate('Updated successfully'))->success();
        return redirect()->route('admin.author');
    }

    public function destroy($id)
    {

        $author = Author::findOrFail($id);
        $author->delete();

        Author::destroy($id);

        flash(translate('Author has been deleted successfully'))->success();
        return back();
    }




// ******************************* Author Writing Start*********************************************

    public function author_writings(Request $request, $id)
    {
        $my_writings = MyWritings::orderBy('id', 'desc')->where('author_id',$id)->paginate(15);

        // dd($my_writings); 

        return view('backend.author.writings',compact('my_writings'));
    }

    
    public function writing_edit($id)
    {
        // dd($id);
        $my_writings = MyWritings::find($id);
        
        return view('backend.author.writings_edit', compact('my_writings'));
    }

    public function writing_update(Request $request, $id)
    {    
        // dd($request);

        if($request->post == null){
            flash(translate('Please Fill Post Section'))->warning();
            return back();
        }else{

            $my_writings = MyWritings::where('id',$id)->first();

            $author_id = Author::where('id',$my_writings->author_id)->first();

            $update = MyWritings::find($id);

            $update->title = $request->title;
            $update->post = $request->post;
            $update->discount = $request->discount; 
            $update->feature_image = $request->feature_image;
            $update->status = $request->status;
            $update->save();

            flash(translate('Updated Successfully'))->success();
            return redirect()->route('admin.author_writings_backend',$author_id->id);

        }
    }

    public function writing_destroy($id)
    {
        $my_writing = MyWritings::findOrFail($id);
        $my_writing->delete();

        MyWritings::destroy($id);

        flash(translate('Deleted Successfully'))->success();
        return back();
    }

// ************************************** Author Writing End*********************************************







    // *********************** book section ******************************************

    public function books_index(Request $request, $id)
    {

        // dd($request);
        // dd($id);

        $my_books = MyBooks::orderBy('id', 'desc')->where('author_id',$id)->paginate(15);

        return view('backend.author.books',compact('my_books'));
    }

    public function books_edit($id)
    {
        
        $my_books = MyBooks::where('id',$id)->first();
        // dd($my_books);
        
        return view('backend.author.books_edit', compact('my_books'));
    }

    public function books_update(Request $request, $id)
    {    

        $my_book = MyBooks::where('id',$id)->first();

        $author_id = Author::where('id',$my_book->author_id)->first();
        
        $update = MyBooks::find($id);

        $update->book_title = $request->title;
        $update->book_description = $request->description;
        $update->search_store_link = $request->search_store_link; 
        $update->order = $request->order;
        $update->book_image = $request->book_image;
        $update->status = $request->status;
        
        $update->save();

        

        flash(translate('Updated Successfully'))->success();
        return redirect()->route('admin.books',$author_id->id);
    }

    public function books_destroy($id)
    {
        $my_books = MyBooks::findOrFail($id);
        $my_books->delete();

        MyBooks::destroy($id);

        flash(translate('Deleted Successfully'))->success();
        return back();
    }





}