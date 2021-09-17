@extends('frontend.layouts.user_panel')

@section('panel_content')

    <div class="aiz-titlebar mt-2 mb-4">
      <div class="row align-items-center">
        <div class="col-md-6">
            <h1 class="h3">{{ translate('Edit My Book') }}</h1>
        </div>
      </div>
    </div>

<form id="add_form" class="form-horizontal" action="{{ route('my_books.update',$my_books->id) }}" enctype="multipart/form-data" method="POST" name="myForm" onsubmit="return validateForm()">
@csrf
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0 h6">{{translate('Book Information')}}</h5>
                </div>
                <div class="card-body">                                        
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">
                                {{translate('Book Title')}}
                                <span class="text-danger">*</span>
                            </label>
                            <div class="col-md-9">
                                <input type="text" placeholder="{{translate('Book Title')}}" id="title" name="title" value="{{ $my_books->book_title }}" class="form-control" required>
                            </div>
                        </div>    
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">
                                {{translate('Book Description')}}
                                <span class="text-danger">*</span>
                            </label>
                            <div class="col-md-9">
                                <textarea name="description" rows="6" class="form-control" required>{{ $my_books->book_description }}</textarea>
                            </div>
                        </div>                       
                        
                        <div class="form-group row">
                            <label class="col-md-3 col-from-label">
                                {{translate('Search Store Link')}} 
                                <span class="text-danger">*</span>
                            </label>
                            <br>
                            <div class="col-md-9">
                                <select class="form-control aiz-selectpicker" id="search_store_link" name="search_store_link" data-live-search="true" required>
                                    <option value="Enabled" {{ $my_books->search_store_link == 'Enabled' ? "selected" : "" }}>Enable</option>
                                    <option value="Disabled" {{ $my_books->search_store_link == 'Disabled' ? "selected" : "" }}>Disable</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">
                                {{translate('Order')}}
                                <span class="text-danger">*</span>
                            </label>
                            <div class="col-md-9">
                                <input type="number" placeholder="{{translate('Order')}}" id="order" name="order" value="{{ $my_books->order }}" class="form-control" required>
                            </div>
                        </div>  

                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="signinSrEmail">{{translate('Book Image')}}
                                <span class="text-danger">*</span>
                            </label>
                            <div class="col-md-9">
                                <div class="input-group" data-toggle="aizuploader" data-type="image">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text bg-soft-secondary font-weight-medium">{{ translate('Browse')}}</div>
                                    </div>
                                    <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                                    <input type="hidden" name="book_image" value="{{ $my_books->book_image }}" class="selected-files" required>
                                </div>
                                <div class="file-preview box sm">
                                </div>
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

<script>
function validateForm() {
  let x = document.forms["myForm"]["book_image"].value;
  if (x == "") {
    alert("Please Add Book Image");
    return false;
  }
}
</script>

@endsection



