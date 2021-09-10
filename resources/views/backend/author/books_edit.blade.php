@extends('backend.layouts.app')

@section('content')

<form id="add_form" class="form-horizontal" action="{{ route('books.update',$my_books->id) }}" enctype="multipart/form-data" method="POST">
@csrf
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0 h6">{{translate('Edit Book Information')}}</h5>
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
                    </div>
            </div>
        </div>

        <div class="col-lg-4 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0 h6">{{translate('Status')}}</h5>
                </div>
                <div class="card-body">
                   
                        <div class="form-group" id="category">
                            <label class="col-md-12 col-from-label">
                                {{translate('Approval')}} 
                                <span class="text-danger">*</span>
                            </label>
                            <br>
                            <div class="col-md-12 mt-2">
                                <select class="form-control aiz-selectpicker" name="status" id="status" data-live-search="true" required>
                                    <option value="Approved" {{ $my_books->status == 'Approved' ? "selected" : "" }}>Approved</option>
                                    <option value="Disapproved" {{ $my_books->status == 'Disapproved' ? "selected" : "" }}>Disapproved</option>
                                    <option value="Pending" {{ $my_books->status == 'Pending' ? "selected" : "" }}>Pending</option>
                                </select>
                            </div>

                            <div class="form-group mt-4 text-center">
                                <button type="submit" class="btn btn-primary">
                                    {{translate('Save')}}
                                </button>
                            </div>

                        </div>
                   
                </div>
            </div>
        </div>
    </div>
</form>

@endsection




