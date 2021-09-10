@extends('frontend.layouts.app')

@push('after-styles')
    <link rel="stylesheet" href="{{ static_asset('assets/css/author_page.css') }}">
@endpush

@section('content')

    <section class="author_page">
        <div class="container-fluid p-0">
            @if(\App\Models\Author::where('id', $author->id)->first()->cover_photo != null)
                <img src="{{ uploaded_asset($author->cover_photo)}}" alt="" class="img-fluid w-100" style="object-fit:cover; height: 20rem;">
            @else
                <img src="{{ uploaded_asset($author->cover_photo)}}" alt="" class="img-fluid w-100" style="object-fit:cover; height: 20rem; border: 3px solid white; border-radius: 10px;">
            @endif
        </div>


        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-sm-2 profile-img">
                    @if(\App\Models\Author::where('id', $author->id)->first()->profile_picture != null)
                        <img src="{{ uploaded_asset($author->profile_picture)}}" class="position-absolute img-fluid" alt="" style="top: -7rem; object-fit: cover; height: 10rem; left: 1.5rem; border: 5px solid white; border-radius: 9px;">
                    @else
                        <img src="{{ uploaded_asset($author->profile_picture)}}" class="position-absolute img-fluid shadow-lg" alt="" style="top: -7rem; object-fit: cover; height: 10rem; left: 1.5rem; border: 5px solid white; border-radius: 9px;">
                    @endif
                </div>

                <div class="col-sm-7 profile-name" style="padding-left: 4rem;">
                    <h3 class="font-weight-bold mb-0">{{ $author->author_name }}</h3>
                </div>

                <div class="col-sm-3">
                    <div class="row align-items-center profile-buttons">
                        <div class="col-7 col-md-8 text-right">
                            <button class="btn shadow-lg bg-white" style="border-radius: 0.8rem;">468 Followers</button>
                        </div>
                        <div class="col-5 col-md-4">
                        <button class="bi bi-heart-fill border-0 shadow-lg px-3 py-1" style="border-radius: 0.8rem; font-size: 1.5rem; color: #FF6243; background-color: white"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container profile-contact bg-white p-5" style="margin-top: 5rem;">
            <div class="row">
                <div class="col-sm-3">
                    <h5 class="font-weight-bold">Contact Details</h5>
                    <hr class="m-0" style="height:2px; border-width:0; width: 8rem; background-color:#FF0000">

                    <div class="row align-items-center mt-3 pl-4">
                        <div class="col-2">
                            <img src="{{ url('assets/img/author/call.png') }}" alt="">
                        </div>
                        <div class="col-10">
                            <p class="mb-0">{{ $author->contact_number }}</p>
                        </div>
                    </div>

                    <div class="row mt-2 align-items-center pl-4">
                        <div class="col-2">
                            <img src="{{ url('assets/img/author/mail.png') }}" alt="">
                        </div>
                        <div class="col-10">
                            <p class="mb-0">{{ $author->email }}</p>
                        </div>
                    </div>


                    <div class="social row mt-3 align-items-center" style="padding-left: 2.4rem;">
                        <a href="{{ $author->facebook_link }}" style="color:black;"><i class="bi bi-facebook mr-3"></i></a>
                        <a href="{{ $author->twitter_link }}" style="color:black;"><i class="bi bi-twitter mr-3"></i></a>
                        <a href="#" style="color:black;"><i class="bi bi-linkedin mr-3"></i></a>
                    </div>
                </div>

                <div class="col-sm-8">
                    <h5 class="font-weight-bold">Bio</h5>
                    <hr class="m-0" style="height:2px; border-width:0; width: 5.5rem; background-color:#FF0000">

                    <p class="mt-3 mb-0" style="text-align:justify;">{{ $author->description }}</p>
                </div>
            </div>
        </div>

        <div class="my-books" style="margin-top: 6rem; margin-bottom: 6rem;">
            <div class="container bg-white p-5">
                <h5 class="font-weight-bold" p-2>My Books</h5>
                <hr class="m-0" style="height:2px; border-width:0; width: 7.5rem; background-color:#FF0000">

                <div class="mt-5">
                    <div class="row mb-4">
                        @foreach($books as $book)
                            <div class="col-sm-3">
                                
                                <div class="card shadow-lg">
                                    <img src="{{ uploaded_asset($book->thumbnail_img)}}" class="card-img-top img-fluid" alt="..." style="object-fit:cover; height: 12rem;">
                                    <div class="card-body p-2">
                                        <h5 class="card-title font-weight-bold" style="font-size: 0.9rem;">{{ $book->name }}</h5>
                                        <p class="card-text" style="font-size: 0.8rem; text-align: justify; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 5; -webkit-box-orient: vertical;">{{ $book->description }}</p>
                                    </div>
                                </div>
                                
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection