@extends('frontend.layouts.app')

@section('content')
<section class="pt-4 mb-4">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-6 text-center text-lg-left">
                <h1 class="fw-600 h4">{{ translate('Ask the Book Finder') }}</h1>
            </div>
            <div class="col-lg-6">
                <ul class="breadcrumb bg-transparent p-0 justify-content-center justify-content-lg-end">
                    <li class="breadcrumb-item opacity-50">
                        <a class="text-reset" href="{{ route('home') }}">{{ translate('Home')}}</a>
                    </li>
                    <li class="text-dark fw-600 breadcrumb-item">
                        <a class="text-reset" href="{{ route('book_finder') }}">"{{ translate('Ask the Book Finder') }}"</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<div class="container-fluid">
<section class="mb-4">
    
    <div style="padding: 25px; background: url('{{url('assets/img/Book_finder.svg')}}'); width:100%; background-repeat: no-repeat; background-size: auto;" >
    
        

        <div class="row">
            <div class="col-4" style="margin: 120px; 0 0 0;">
            
            <form action="{{ route('book_finder_request.store') }}" method="post">
                {{csrf_field()}}
                    <div class="text-center mb-5">
                        <h4><b>Book Finder Request</b></h4>                        
                    </div>
                    <div>

                        <div class="form-group row">
                            <!-- <label class="col-md-3 col-form-label">
                                {{translate('Book Name :')}}
                                <span class="text-danger">*</span>
                            </label> -->
                            <div class="col-md-12">
                                <input type="text" id="book_name" name="book_name" class="form-control p-4" style="box-shadow: 0 3px 10px rgb(0 0 0 / 0.2)" placeholder="Book Name" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <!-- <label class="col-md-3 col-form-label">
                                {{translate('Author Name :')}}
                                <span class="text-danger">*</span>
                            </label> -->
                            <div class="col-md-12">
                                <input type="text" id="author_name" name="author_name" class="form-control p-4" style="box-shadow: 0 3px 10px rgb(0 0 0 / 0.2)" placeholder="Author Name" required>
                            </div>
                        </div> 
                        <div class="form-group row">
                            <!-- <label class="col-md-3 col-form-label">
                                {{translate('Publisher Name :')}}
                                <span class="text-danger">*</span>
                            </label> -->
                            <div class="col-md-12">
                                <input type="text" id="publisher_name" name="publisher_name" class="form-control p-4" style="box-shadow: 0 3px 10px rgb(0 0 0 / 0.2)" placeholder="Publisher Name" required>
                            </div>
                        </div> 
                        <div class="form-group row">
                            <!-- <label class="col-md-3 col-form-label">
                                {{translate('Book Type :')}}
                                <span class="text-danger">*</span>
                            </label> -->
                            <div class="col-md-12">
                                <input type="text" id="book_type" name="book_type" class="form-control p-4" style="box-shadow: 0 3px 10px rgb(0 0 0 / 0.2)" placeholder="Book Type" required>
                            </div>
                        </div>  


                    </div>
                    <div class="mt-4">
                        <button type="button" class="btn btn-light mr-3 px-4 bg-white" style="border-radius: 10px; border: 2px solid red;" data-dismiss="modal"><b>Close</b></button>
                        <button type="submit" class="btn btn-primary px-4" style="border-radius: 10px;">Send Request</button>
                    </div>
                </form>  

            </div>
            <div class="col-4">
            
            </div>
            <div class="col-4">
            
            </div>
        </div>
    
    </div>
    
</section>
</div>

@endsection
