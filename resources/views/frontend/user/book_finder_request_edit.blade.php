@extends('frontend.layouts.user_panel')

@section('panel_content')

    <div class="aiz-titlebar mt-2 mb-4">
      <div class="row align-items-center">
        <div class="col-md-6">
            <h1 class="h3">{{ translate('Edit Book Finder Request') }}</h1>
        </div>
      </div>
    </div>

<form id="add_form" class="form-horizontal" action="{{ route('book_finder_request.user_update',$book_finder_request->id) }}" enctype="multipart/form-data" method="POST">
@csrf
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0 h6">{{translate('Book Finder Request Information')}}</h5>
                </div>
                <div class="card-body"> 

                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">
                                {{translate('Book Name')}}
                                <span class="text-danger">*</span>
                            </label>
                            <div class="col-md-9">
                                <input type="text" id="book_name" name="book_name" value="{{ $book_finder_request->book_name }}" class="form-control" required>
                            </div>
                        </div>  
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">
                                {{translate('Author Name')}}
                                <span class="text-danger">*</span>
                            </label>
                            <div class="col-md-9">
                                <input type="text" id="author_name" name="author_name" value="{{ $book_finder_request->author_name }}" class="form-control" required>
                            </div>
                        </div>  
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">
                                {{translate('Publisher Name')}}
                                <span class="text-danger">*</span>
                            </label>
                            <div class="col-md-9">
                                <input type="text" id="publisher_name" name="publisher_name" value="{{ $book_finder_request->publisher_name }}" class="form-control" required>
                            </div>
                        </div>  
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">
                                {{translate('Book Type')}}
                                <span class="text-danger">*</span>
                            </label>
                            <div class="col-md-9">
                                <input type="text" id="book_type" name="book_type" value="{{ $book_finder_request->book_type }}" class="form-control" required>
                            </div>
                        </div>                                                            
                        
                        <div class="form-group mb-0 mt-2 text-right">
                            <button type="submit" class="btn btn-primary">
                                {{translate('Save')}}
                            </button>
                        </div>
                    
                </div>
            </div>
        </div>

        
    </div>
</form>

    

@endsection



