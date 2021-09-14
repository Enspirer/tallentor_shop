@extends('backend.layouts.app')

@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

<form id="add_form" class="form-horizontal" action="{{ route('author.store') }}" enctype="multipart/form-data" method="POST" name="myForm" onsubmit="return validateForm()">
@csrf
    <div class="row">
        <div class="col-lg-12 mx-auto">
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
                                <input type="text" placeholder="{{translate('Author Name')}}" id="name" name="name" class="form-control" required>
                                <input type="hidden" class="form-control mb-3" name="slug" id="slug">
                            </div>
                        </div>   
                        <div class="form-group row" id="category">
                            <label class="col-md-3 col-from-label">
                                {{translate('Select User')}} 
                                <span class="text-danger">*</span>
                            </label>
                            <br>
                            <div class="col-md-9">
                                <select class="form-control aiz-selectpicker" name="user_id" id="user_id" data-live-search="true" required>
                                        <option selected disabled value="">Select...</option>                                    
                                    @foreach($users as $key => $user)
                                        <option value="{{ $user->id }}">{{ $user->email }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div> 
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">
                                {{translate('Author Description')}}
                                <span class="text-danger">*</span>
                            </label>
                            <div class="col-md-9">
                                <textarea name="description" rows="6" class="form-control" required></textarea>
                            </div>
                        </div>                        
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">
                                {{translate('Contact Number')}}
                                <span class="text-danger">*</span>
                            </label>
                            <div class="col-md-9">
                                <input type="text" placeholder="{{translate('Contact Number')}}" id="contact_number" name="contact_number" class="form-control" required>
                            </div>
                        </div>  
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">
                                {{translate('Email')}}
                                <span class="text-danger">*</span>
                            </label>
                            <div class="col-md-9">
                                <input type="email" placeholder="{{translate('Email')}}" id="email" name="email" class="form-control" required>
                            </div>
                        </div> 
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">
                                {{translate('Facebook Link')}}
                                <!-- <span class="text-danger">*</span> -->
                            </label>
                            <div class="col-md-9">
                                <input type="text" id="facebook_link" name="facebook_link" class="form-control" >
                            </div>
                        </div> 
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">
                                {{translate('Twitter Link')}}
                                <!-- <span class="text-danger">*</span> -->
                            </label>
                            <div class="col-md-9">
                                <input type="text" id="twitter_link" name="twitter_link" class="form-control" >
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
                                    <input type="hidden" name="profile_picture" class="selected-files" >
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
                                    <input type="hidden" name="cover_photo" class="selected-files" >
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
