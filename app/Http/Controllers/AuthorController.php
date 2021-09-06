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

        $author->facebook_link = '';
        $author->twitter_link = '';
        $author->slug = '883Drjjsel';
        $author->save();
        flash(translate('Author has been inserted successfully'))->success();
        return back();


    }
}
