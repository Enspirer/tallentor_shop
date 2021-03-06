@extends('backend.layouts.app')

@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

<form id="add_form" class="form-horizontal" action="{{ route('author.update',$author->id) }}" enctype="multipart/form-data" method="POST" name="myForm" onsubmit="return validateForm()">
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
                                <input type="hidden" class="form-control mb-3" name="slug" id="slug" value="{{ $author->slug }}">
                            </div>
                        </div>    
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">
                                {{translate('Author Description')}}
                                <span class="text-danger">*</span>
                            </label>
                            <div class="col-md-9">
                                <textarea name="description" rows="6" class="form-control" required>{{ $author->author_description }}</textarea>
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
                                <input type="email" placeholder="{{translate('Email')}}" id="email" name="email" value="{{ $author->email }}" class="form-control" required>
                            </div>
                        </div> 
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">
                                {{translate('Facebook Link')}}
                                <!-- <span class="text-danger">*</span> -->
                            </label>
                            <div class="col-md-9">
                                <input type="text" id="facebook_link" name="facebook_link" value="{{ $author->facebook_link }}" class="form-control" >
                            </div>
                        </div> 
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">
                                {{translate('Twitter Link')}}
                                <!-- <span class="text-danger">*</span> -->
                            </label>
                            <div class="col-md-9">
                                <input type="text" id="twitter_link" name="twitter_link" value="{{ $author->twitter_link }}" class="form-control" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="signinSrEmail">{{translate('Profile Picture')}}
                                <span class="text-danger">*</span>
                            </label>
                            <div class="col-md-9">
                                <div class="input-group" data-toggle="aizuploader" data-type="image">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text bg-soft-secondary font-weight-medium">{{ translate('Browse')}}</div>
                                    </div>
                                    <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                                    <input type="hidden" name="profile_picture" value="{{ $author->profile_picture }}" class="selected-files" required>
                                </div>
                                <div class="file-preview box sm">
                                </div>
                            </div>
                        </div>    
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="signinSrEmail">{{translate('Cover Photo')}}
                                <span class="text-danger">*</span>
                            </label>
                            <div class="col-md-9">
                                <div class="input-group" data-toggle="aizuploader" data-type="image" data-multiple="true">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text bg-soft-secondary font-weight-medium">{{ translate('Browse')}}</div>
                                    </div>
                                    <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                                    <input type="hidden" name="cover_photo" value="{{ $author->cover_photo }}" class="selected-files" required>
                                </div>
                                <div class="file-preview box sm">
                                </div>
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

$("#name").keyup(function(){
    var str = $(this).val();
    var trims = $.trim(str)
    var slug = trims.replace(/[^a-z0-9]/gi, '-').replace(/-+/g, '-').replace(/^-|-$/g, '')
    $("#slug").val(slug.toLowerCase()) 
});  

    function validateForm() {
        let x = document.forms["myForm"]["profile_picture"].value;
        if (x == "") {
            alert("Please Add Profile Picture");
            return false;
        }
    }  

</script>
@endsection
