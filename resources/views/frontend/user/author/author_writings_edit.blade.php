@extends('frontend.layouts.user_panel')

@section('panel_content')

<script src="https://cdn.ckeditor.com/ckeditor5/29.0.0/classic/ckeditor.js"></script>

    <div class="aiz-titlebar mt-2 mb-4">
      <div class="row align-items-center">
        <div class="col-md-6">
            <h1 class="h3">{{ translate('Edit Post') }}</h1>
        </div>
      </div>
    </div>

<form id="add_form" class="form-horizontal" action="{{ route('author_writings.update',$my_writings->id) }}" enctype="multipart/form-data" method="POST">
@csrf
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0 h6">{{translate('Post Information')}}</h5>
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



