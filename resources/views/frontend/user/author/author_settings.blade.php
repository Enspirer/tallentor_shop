@extends('frontend.layouts.user_panel')

@section('panel_content')

    @if($author_details->status == 'Pending')
        <div class="row gutters-10 justify-content-center">
            <div class="col-md-12 mx-auto mb-3">
                <div class="p-3 rounded mb-3 text-center bg-white shadow-sm hov-shadow-lg has-transition">
                    <h5 style="color:red;">Waiting for Admin Approval</h5>
                </div>
            </div>
        </div> 
    @endif

    <div class="aiz-user-panel">
        <div class="page-title">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h2 class="heading heading-6 text-capitalize strong-600 mb-2">
                        Author Settings
                    </h2>
                </div>
                <div class="col-md-6">
                    <div class="float-md-right">
                        <ul class="breadcrumb">

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <form class="" action="{{route('user.author.update')}}" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-box-title px-3 py-2">
                        Author Information
                    </div>
                    <input type="hidden" value="{{$author_details->id}}" name="id">
                    <div class="form-box-content p-3">
                        <div class="row">
                            <div class="col-md-2">
                                <label>Your name <span class="text-danger">*</span></label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" class="form-control mb-3" value="{{$author_details->author_name}}" placeholder="Your name" name="author_name" required="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <label>Description<span class="text-danger">*</span></label>
                            </div>
                            <div class="col-md-10">
                                <textarea type="text" class="form-control mb-3" placeholder="About Yourself" name="description" rows="5" required="">{{$author_details->author_description}}</textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <label>Email <span class="text-danger">*</span></label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" class="form-control mb-3" placeholder="Email" name="email" required="" value="{{$author_details->email}}">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-2">
                                <label>Phone Number <span class="text-danger">*</span></label>
                            </div>
                            <div class="col-md-10">
                                <input type="number" class="form-control mb-3" placeholder="Phone Number" name="phone_number" value="{{$author_details->contact_number}}" required="">
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
                                    <input type="hidden" name="profile_image" class="selected-files" value="{{$author_details->profile_picture}}">
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
                                    <input type="hidden" name="cover_photo" class="selected-files" value="{{$author_details->cover_photo}}">
                                </div>
                                <div class="file-preview box sm">
                                </div>
                            </div>
                        </div><br>

                        <div class="row">
                            <div class="col-md-2">
                                <label>Facebook<span class="text-danger">*</span></label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" class="form-control mb-3" placeholder="Facebook Link" name="facebook_link" value="{{$author_details->facebook_link}}">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-2">
                                <label>Twitter<span class="text-danger">*</span></label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" class="form-control mb-3" placeholder="Twitter Link" name="twitter_link" value="{{$author_details->twitter_link}}">
                            </div>
                        </div>

                    </div>
                    <div class="text-right mt-4">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection



