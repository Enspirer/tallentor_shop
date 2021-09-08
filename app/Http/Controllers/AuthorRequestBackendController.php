<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;


class AuthorRequestBackendController extends Controller
{
   
    public function index(Request $request)
    {

        $sort_search = null;
        $authors = Author::orderBy('id', 'desc')->where('status','=','Pending');

        if ($request->search != null){

            $sort_search = $request->search;
            $authors = $authors->where('author_name', 'like', '%'.$sort_search.'%')->where('status','=','Pending');
        }        

        $authors = $authors->paginate(15);

        return view('backend.author_request.index',compact('authors','sort_search'));
    }

    public function edit($id)
    {
        $author = Author::find($id);
        
        return view('backend.author_request.edit', compact('author'));
    }

    public function update(Request $request, $id)
    {    
        
        $add = Author::find($id);
               
        $add->status = $request->status;
        
        $add->save();

        flash(translate('Updated successfully'))->success();
        return redirect()->route('admin.author_request');
    }

    public function destroy($id)
    {

        $author = Author::findOrFail($id);
        $author->delete();

        Author::destroy($id);

        flash(translate('Author Request has been deleted successfully'))->success();
        return back();
    }

}
