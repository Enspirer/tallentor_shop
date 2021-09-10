<?php

namespace App\Http\Controllers;
use App\Models\BookFinder;

use Illuminate\Http\Request;

class BookFinderRequestController extends Controller
{
    public function index(Request $request)
    {

        $sort_search = null;
        $book_finder_request = BookFinder::orderBy('id', 'desc')->where('status','=','Pending');

        if ($request->search != null){

            $sort_search = $request->search;
            $book_finder_request = $book_finder_request->where('book_name', 'like', '%'.$sort_search.'%')->where('status','=','Pending');
        }        

        $book_finder_request = $book_finder_request->paginate(15);

        return view('backend.book_finder_request.index',compact('book_finder_request','sort_search'));
    }

    public function edit($id)
    {
        $book_finder_request = BookFinder::find($id);
        
        return view('backend.book_finder_request.edit', compact('book_finder_request'));
    }

    public function update(Request $request, $id)
    {    
        
        $add = BookFinder::find($id);
               
        $add->status = $request->status;
        
        $add->save();

        flash(translate('Updated successfully'))->success();
        return redirect()->route('admin.book_finder_request');
    }

    public function destroy($id)
    {

        $author = BookFinder::findOrFail($id);
        $author->delete();

        BookFinder::destroy($id);

        flash(translate('Book Finder Request has been deleted successfully'))->success();
        return back();
    }



// ***************************** Frontend ***************************************************

    public function store(Request $request)
    {    
        // dd($request);

        // $author_details = Author::where('user_id',auth()->user()->id)->first();

        $add = new BookFinder;

        $add->book_name = $request->book_name;
        $add->author_name = $request->author_name;
        $add->publisher_name = $request->publisher_name;  
        $add->book_type = $request->book_type;     
        $add->status = 'Pending';
        $add->user_id = auth()->user()->id; 
        
        $add->save();

        flash(translate('Request Sent Successfully'))->success();
        return redirect()->route('home');
    }

    public function user_index(Request $request)
    {
        // dd(auth()->user()->id);
        
        $book_finder_request = BookFinder::orderBy('id', 'desc')->where('user_id',auth()->user()->id)->paginate(15);  

        // dd($book_finder_request);       

        return view('frontend.user.book_finder_request',compact('book_finder_request'));
    }
    
    public function user_edit($id)
    {
        $book_finder_request = BookFinder::find($id);
        
        return view('frontend.user.book_finder_request_edit', compact('book_finder_request'));
    }

    public function user_update(Request $request, $id)
    {    
        
        $add = BookFinder::find($id);
            
        $add->book_name = $request->book_name;
        $add->author_name = $request->author_name;
        $add->publisher_name = $request->publisher_name;
        $add->book_type = $request->book_type;  
        $add->status = 'Pending';
        $add->user_id = auth()->user()->id; 
        
        $add->save();

        flash(translate('Updated successfully'))->success();
        return redirect()->route('book_finder_request.index');
    }

    public function user_destroy($id)
    {
        $author = BookFinder::findOrFail($id);
        $author->delete();

        BookFinder::destroy($id);

        flash(translate('Book Finder Request has been deleted successfully'))->success();
        return back();
    }




}
