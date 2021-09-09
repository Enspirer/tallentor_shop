@extends('backend.layouts.app')

@section('content')

<form id="add_form" class="form-horizontal" action="{{ route('book_finder_request.update',$book_finder_request->id) }}" enctype="multipart/form-data" method="POST">
@csrf
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0 h6">{{translate('Book Finder Request Information')}}</h5>
                </div>
                <div class="card-body">
                                        
                        <div class="form-group row">
                            <label class="col-md-3">
                                {{translate('Book Name :')}}
                                <!-- <span class="text-danger">*</span> -->
                            </label>
                            <div class="col-md-9">
                                {{ $book_finder_request->book_name }}                                
                            </div>
                        </div>    
                        <div class="form-group row">
                            <label class="col-md-3">
                                {{translate('Author Name :')}}
                                <!-- <span class="text-danger">*</span> -->
                            </label>
                            <div class="col-md-9">
                                {{ $book_finder_request->author_name }}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3">
                                {{translate('Publisher Name :')}}
                                <!-- <span class="text-danger">*</span> -->
                            </label>
                            <div class="col-md-9">
                                {{ $book_finder_request->publisher_name }}
                            </div>
                        </div>  
                        <div class="form-group row">
                            <label class="col-md-3">
                                {{translate('Book Type :')}}
                                <!-- <span class="text-danger">*</span> -->
                            </label>
                            <div class="col-md-9">
                               {{ $book_finder_request->book_type }}
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
                                    <option value="Approved" {{ $book_finder_request->status == 'Approved' ? "selected" : "" }}>Approved</option>
                                    <option value="Disapproved" {{ $book_finder_request->status == 'Disapproved' ? "selected" : "" }}>Disapproved</option>
                                    <option value="Pending" {{ $book_finder_request->status == 'Pending' ? "selected" : "" }}>Pending</option>
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
