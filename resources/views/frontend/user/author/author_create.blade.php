@extends('frontend.layouts.user_panel')

@section('panel_content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    
    
    <div class="aiz-user-panel">
        <div class="page-title">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h2 class="heading heading-6 text-capitalize strong-600 mb-0">
                        Author Form
                    </h2>
                </div>
                <div class="col-md-6">
                    <div class="float-md-right">
                        <ul class="breadcrumb">
                            <li><a href="http://localhost:8000">Home</a></li>
                            <li><a href="http://localhost:8000/dashboard">Dashboard</a></li>
                            <li class="active"><a href="http://localhost:8000/shops">Shop Settings</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <form class="" action="{{route('author.store')}}" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-box-title px-3 py-2">
                       Author Information
                    </div>
                    <div class="form-box-content p-3">
                        <div class="row">
                            <div class="col-md-2">
                                <label>Your name <span class="text-danger">*</span></label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" class="form-control mb-3" placeholder="Your name" name="author_name" id="author_name" required="">
                                <input type="hidden" class="form-control mb-3" name="slug" id="slug">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <label>Description<span class="text-danger">*</span></label>
                            </div>
                            <div class="col-md-10">
                                <textarea type="text" class="form-control mb-3" placeholder="About Yourself" name="description" rows="5" required=""></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <label>Email <span class="text-danger">*</span></label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" class="form-control mb-3" placeholder="Email" name="email" required="">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-2">
                                <label>Phone Number <span class="text-danger">*</span></label>
                            </div>
                            <div class="col-md-10">
                                <input type="number" class="form-control mb-3" placeholder="Phone Number" name="phone_number" required="">
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-md-2"
                                   for="signinSrEmail">{{translate('Profile Image')}}  <span class="text-danger">*</span></label>
                            <div class="col-md-10">
                                <div class="input-group" data-toggle="aizuploader" data-type="image" data-multiple="true">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text bg-soft-secondary font-weight-medium">
                                            {{ translate('Browse')}}</div>
                                    </div>
                                    <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                                    <input type="hidden" name="profile_image" class="selected-files">
                                </div>
                                <div class="file-preview box sm">
                                </div>
                            </div>
                        </div> <br>

                        <div class="row">
                            <label class="col-md-2"
                                   for="signinSrEmail">{{translate('Cover Image')}}</label>
                            <div class="col-md-10">
                                <div class="input-group" data-toggle="aizuploader" data-type="image" data-multiple="true">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text bg-soft-secondary font-weight-medium">
                                            {{ translate('Browse')}}</div>
                                    </div>
                                    <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                                    <input type="hidden" name="cover_photo" class="selected-files">
                                </div>
                                <div class="file-preview box sm">
                                </div>
                            </div>
                        </div><br>




                    </div>
                    <div class="text-right mt-4">
                        <button type="submit" class="btn btn-primary">Apply</button>
                    </div>
                </form>
            </div>
        </div>

    </div>

<script>

$("#author_name").keyup(function(){
    var str = $(this).val();
    var trims = $.trim(str)
    var slug = trims.replace(/[^a-z0-9]/gi, '-').replace(/-+/g, '-').replace(/^-|-$/g, '')
    $("#slug").val(slug.toLowerCase()) 
});    

</script>

@endsection
