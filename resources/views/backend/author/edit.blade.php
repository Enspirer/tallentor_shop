@extends('backend.layouts.app')

@section('content')

<form id="add_form" class="form-horizontal" action="{{ route('author.update') }}" enctype="multipart/form-data" method="POST">
@csrf
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0 h6">{{translate('Author Information')}}</h5>
                </div>
                <div class="card-body">
                                        
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">
                                {{translate('Author Name')}}
                                <span class="text-danger">*</span>
                            </label>
                            <div class="col-md-9">
                                <input type="text" placeholder="{{translate('Author Name')}}" id="name" name="name" value="{{ $author->author_name }}" class="form-control" required>
                            </div>
                        </div>    
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">
                                {{translate('Author Description')}}
                                <span class="text-danger">*</span>
                            </label>
                            <div class="col-md-9">
                                <textarea name="description" rows="6" class="form-control">{{ $author->author_description }}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">
                                {{translate('Slug')}}
                                <span class="text-danger">*</span>
                            </label>
                            <div class="col-md-9">
                                <input type="text" placeholder="{{translate('Slug')}}" id="slug" name="slug" value="{{ $author->slug }}" class="form-control" required>
                            </div>
                        </div> 
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">
                                {{translate('Contact Number')}}
                                <span class="text-danger">*</span>
                            </label>
                            <div class="col-md-9">
                                <input type="text" placeholder="{{translate('Contact Number')}}" id="contact_number" name="contact_number" value="{{ $author->contact_number }}" class="form-control" required>
                            </div>
                        </div>  
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">
                                {{translate('Email')}}
                                <span class="text-danger">*</span>
                            </label>
                            <div class="col-md-9">
                                <input type="text" placeholder="{{translate('Email')}}" id="email" name="email" value="{{ $author->email }}" class="form-control" required>
                            </div>
                        </div>                                       
                        
                        <div class="form-group mb-0 text-right">
                            <button type="submit" class="btn btn-primary">
                                {{translate('Save')}}
                            </button>
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
                                    <option value="Approved" {{ $author->status == 'Approved' ? "selected" : "" }}>Approved</option>
                                    <option value="Disapproved" {{ $author->status == 'Disapproved' ? "selected" : "" }}>Disapproved</option>
                                    <option value="Pending" {{ $author->status == 'Pending' ? "selected" : "" }}>Pending</option>
                                </select>
                            </div>
                        </div>
                   
                </div>
            </div>
        </div>
    </div>
</form>
@endsection

@section('script')
<script>
    function makeSlug(val) {
        let str = val;
        let output = str.replace(/\s+/g, '-').toLowerCase();
        $('#slug').val(output);
    }
</script>
@endsection
