<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

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
        $author->status = 'Approved';
        $author->facebook_link = '';
        $author->twitter_link = '';
        $author->slug = '883Drjjsel';
        $author->save();
        flash(translate('Author has been inserted successfully'))->success();
        return back();
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
           'email' => $request->email
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

    public function my_books()
    {
        return view('frontend.user.author.my_bookings');
    }

    public function author_page() {
        return view('frontend.author_page');
    }
}
