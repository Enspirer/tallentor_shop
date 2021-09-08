@extends('backend.layouts.app')

@section('content')

<form id="add_form" class="form-horizontal" action="{{ route('author_request.update',$author->id) }}" enctype="multipart/form-data" method="POST">
@csrf
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0 h6">{{translate('Author Information')}}</h5>
                </div>
                <div class="card-body">
                                        
                        <div class="form-group row">
                            <label class="col-md-3">
                                {{translate('Author Name :')}}
                                <!-- <span class="text-danger">*</span> -->
                            </label>
                            <div class="col-md-9">
                                {{ $author->author_name }}                                
                            </div>
                        </div>    
                        <div class="form-group row">
                            <label class="col-md-3">
                                {{translate('Author Description :')}}
                                <!-- <span class="text-danger">*</span> -->
                            </label>
                            <div class="col-md-9">
                                {{ $author->author_description }}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3">
                                {{translate('Contact Number :')}}
                                <!-- <span class="text-danger">*</span> -->
                            </label>
                            <div class="col-md-9">
                                {{ $author->contact_number }}
                            </div>
                        </div>  
                        <div class="form-group row">
                            <label class="col-md-3">
                                {{translate('Email :')}}
                                <!-- <span class="text-danger">*</span> -->
                            </label>
                            <div class="col-md-9">
                               {{ $author->email }}
                            </div>
                        </div> 
                         
                        @if($author->facebook_link !== null)
                            <div class="form-group row">
                                <label class="col-md-3">
                                    {{translate('Facebook Link :')}}
                                    <!-- <span class="text-danger">*</span> -->
                                </label>
                                <div class="col-md-9">
                                    {{ $author->facebook_link }}
                                </div>
                            </div> 
                        @endif
                        @if($author->twitter_link !== null)
                            <div class="form-group row">
                                <label class="col-md-3">
                                    {{translate('Twitter Link :')}}
                                    <!-- <span class="text-danger">*</span> -->
                                </label>
                                <div class="col-md-9">
                                {{ $author->twitter_link }}
                                </div>
                            </div> 
                        @endif                       
                        
                        <div class="form-group row">
                            <label class="col-md-3">
                                {{translate('Slug :')}}
                                <!-- <span class="text-danger">*</span> -->
                            </label>
                            <div class="col-md-9">
                                {{ $author->slug }}
                            </div>
                        </div> 
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="signinSrEmail">{{translate('Profile Picture :')}}</label>
                            <div class="col-md-8">
                                <div class="col-auto">
                                    <img src="{{ uploaded_asset($author->profile_picture)}}" alt="Image" class="size-100px img-fit">
                                </div> 
                            </div>
                        </div>    
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="signinSrEmail">{{translate('Cover Photo :')}}</label>
                            <div class="col-md-8">
                                <div class="col-auto">
                                    <img src="{{ uploaded_asset($author->cover_photo)}}" alt="Image" class="size-100px img-fit">
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
                                    <option value="Approved" {{ $author->status == 'Approved' ? "selected" : "" }}>Approved</option>
                                    <option value="Disapproved" {{ $author->status == 'Disapproved' ? "selected" : "" }}>Disapproved</option>
                                    <option value="Pending" {{ $author->status == 'Pending' ? "selected" : "" }}>Pending</option>
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

@section('script')
<script>
    function makeSlug(val) {
        let str = val;
        let output = str.replace(/\s+/g, '-').toLowerCase();
        $('#slug').val(output);
    }
</script>
@endsection
