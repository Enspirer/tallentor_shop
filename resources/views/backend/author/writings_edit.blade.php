@extends('backend.layouts.app')

@section('content')

<script src="https://cdn.ckeditor.com/ckeditor5/29.0.0/classic/ckeditor.js"></script>

<form id="add_form" class="form-horizontal" action="{{ route('author_writings_backend.update',$my_writings->id) }}" enctype="multipart/form-data" method="POST">
@csrf
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0 h6">{{translate('Edit Post Information')}}</h5>
                </div>
                <div class="card-body">                                        
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">
                                {{translate('Title')}}
                                <span class="text-danger">*</span>
                            </label>
                            <div class="col-md-9">
                                <input type="text" placeholder="{{translate('Title')}}" value="{{ $my_writings->title }}" id="title" name="title" class="form-control" required>
                            </div>
                        </div>    
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">
                                {{translate('Post')}}
                                <span class="text-danger">*</span>
                            </label>
                            <div class="col-md-9">
                                <textarea name="post" id="editor" class="form-control" required> {{ $my_writings->post }} <br><br></textarea>
                            </div>
                        </div>                       
                                                
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">
                                {{translate('Discount')}}
                                <!-- <span class="text-danger">*</span> -->
                            </label>
                            <div class="col-md-9">
                                <input type="text" placeholder="{{translate('Discount')}}" id="discount" value="{{ $my_writings->discount }}" name="discount" class="form-control" required>
                            </div>
                        </div>  

                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="signinSrEmail">{{translate('Feature Image')}}
                                <span class="text-danger">*</span>
                            </label>
                            <div class="col-md-9">
                                <div class="input-group" data-toggle="aizuploader" data-type="image">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text bg-soft-secondary font-weight-medium">{{ translate('Browse')}}</div>
                                    </div>
                                    <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                                    <input type="hidden" name="feature_image" value="{{ $my_writings->feature_image }}" class="selected-files">
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
                                    <option value="Approved" {{ $my_writings->status == 'Approved' ? "selected" : "" }}>Approved</option>
                                    <option value="Disapproved" {{ $my_writings->status == 'Disapproved' ? "selected" : "" }}>Disapproved</option>
                                    <option value="Pending" {{ $my_writings->status == 'Pending' ? "selected" : "" }}>Pending</option>
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

<script>
	ClassicEditor
		.create( document.querySelector( '#editor' ), {
			// toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
		} )
		.then( editor => {
			window.editor = editor;
		} )
		.catch( err => {
			console.error( err.stack );
		} );
</script>  

@endsection




