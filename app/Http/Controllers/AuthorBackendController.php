<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

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

        $add = Author::find($id);

        $add->author_name = $request->name;
        $add->author_description = $request->description;
        $add->slug = $request->slug;
        // $add->slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->slug));
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

}