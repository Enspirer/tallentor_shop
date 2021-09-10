<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Followers;
use App\Models\Author;


class FollowersController extends Controller
{
    
    public function index(Request $request)
    {

        $author_followers = Followers::where('user_id',auth()->user()->id)->orderBy('id', 'desc')->paginate(15); 
      
        return view('frontend.user.author_followers',compact('author_followers'));
    }

    public function destroy($id)
    {
        $author = Followers::findOrFail($id);
        $author->delete();

        Followers::destroy($id);

        flash(translate('Deleted Successfully'))->success();
        return back();
    }



}
