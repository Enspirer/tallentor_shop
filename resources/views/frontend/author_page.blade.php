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


        <div class="container position-relative mt-2">
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

                        @auth
                            @if(is_favorite($author->id, auth()->user()->id))
                                <div class="col-5 col-md-4 small-heart">
                                    <form action="{{ route('favorite_heart') }}" method="POST">
                                    {{csrf_field()}}
                                        <input type="hidden" class="author_id" name='hid_id' value="{{ $author->id }}">
                                        <input type="hidden" class="favorite" name='favorite' value="favorite">
                                        <button class="bi bi-heart-fill border-0 shadow-lg px-3 py-1" style="border-radius: 0.8rem; font-size: 1.5rem; color: #FF6243; background-color: white" type="submit"></button>
                                    </form>
                                </div>
                            @else
                                <div class="col-5 col-md-4 small-heart">
                                    <form action="{{ route('favorite_heart') }}" method="POST">
                                    {{csrf_field()}}
                                        <input type="hidden" class="author_id" name='hid_id' value="{{ $author->id }}">
                                        <input type="hidden" class="favorite" name='favorite' value="non-favorite">
                                        <button class="bi bi-heart border-0 shadow-lg px-3 py-1" style="border-radius: 0.8rem; font-size: 1.5rem; color: #FF6243; background-color: white" type="submit"></button>
                                    </form>
                                </div>
                            @endif
                        @else
                            <div class="col-3 small-heart">
                                <a href="{{ route('auth.login') }}" class="bi bi-heart border-0 shadow-lg px-3 py-1" style="border-radius: 0.8rem; font-size: 1.5rem; color: #FF6243; background-color: white"></a>
                            </div>
                        @endauth
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
                        <!-- <a href="#" style="color:black;"><i class="bi bi-linkedin mr-3"></i></a> -->
                    </div>
                </div>

                <div class="col-sm-8">
                    <!-- <h5 class="font-weight-bold">Bio</h5>
                    <hr class="m-0" style="height:2px; border-width:0; width: 5.5rem; background-color:#FF0000">

                    <p class="mt-3 mb-0" style="text-align:justify;">{{ $author->author_description }}</p> -->

                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active font-weight-bold mr-5 p-0" id="bio-tab" data-toggle="tab" data-target="#bio" type="button" role="tab" aria-controls="bio" aria-selected="true">Bio</button>
                            <!-- <hr class="m-0" style="height:2px; border-width:0; width: 5.5rem; background-color:#FF0000"> -->
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link font-weight-bold mr-3 p-0" id="writings-tab" data-toggle="tab" data-target="#writings" type="button" role="tab" aria-controls="writings" aria-selected="false">My Writings</button>
                            <!-- <hr class="m-0" style="height:2px; border-width:0; width: 5.5rem; background-color:#FF0000"> -->
                        </li>
                    </ul>

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="bio" role="tabpanel" aria-labelledby="bio-tab">
                            <p class="mt-3 mb-0" style="text-align:justify;">{{ $author->author_description }}</p>
                        </div>
                        <div class="tab-pane fade" id="writings" role="tabpanel" aria-labelledby="writings-tab">
                            <div class="row mt-3 border mx-0 py-2 rounded shadow-lg mb-4">
                                <div class="col-6">
                                    <img src="{{ url('uploads/all/0NYgtRkBZtZWV7kOoCXj3gWJq0Som2WRLj9tUj0r.jpg') }}" alt="" class="img-fluid" style="object-fit: cover;">
                                </div>
                                <div class="col-6">
                                    <h5 class="font-weight-bold">Ninja Guy</h5>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veritatis tempora aut assumenda repudiandae. Molestias earum veniam voluptates itaque, aspernatur, asperiores nisi numquam cupiditate, sit animi quia assumenda nostrum! Voluptate veritatis dolor officiis quod natus optio sit explicabo iusto beatae sapiente. Molestiae obcaecati voluptates laborum animi eaque architecto tempora ullam ratione.</p>

                                    <div class="row justify-content-end">
                                        <div class="col-4 text-end">
                                            <button class="btn btn-primary">View More</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-3 border mx-0 py-2 rounded shadow-lg mb-4">
                                <div class="col-6">
                                    <img src="{{ url('uploads/all/0NYgtRkBZtZWV7kOoCXj3gWJq0Som2WRLj9tUj0r.jpg') }}" alt="" class="img-fluid" style="object-fit: cover;">
                                </div>
                                <div class="col-6">
                                    <h5 class="font-weight-bold">Ninja Guy</h5>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veritatis tempora aut assumenda repudiandae. Molestias earum veniam voluptates itaque, aspernatur, asperiores nisi numquam cupiditate, sit animi quia assumenda nostrum! Voluptate veritatis dolor officiis quod natus optio sit explicabo iusto beatae sapiente. Molestiae obcaecati voluptates laborum animi eaque architecto tempora ullam ratione.</p>

                                    <div class="row justify-content-end">
                                        <div class="col-4 text-end">
                                            <button class="btn btn-primary">View More</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-3 border mx-0 py-2 rounded shadow-lg mb-4">
                                <div class="col-6">
                                    <img src="{{ url('uploads/all/0NYgtRkBZtZWV7kOoCXj3gWJq0Som2WRLj9tUj0r.jpg') }}" alt="" class="img-fluid" style="object-fit: cover;">
                                </div>
                                <div class="col-6">
                                    <h5 class="font-weight-bold">Ninja Guy</h5>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veritatis tempora aut assumenda repudiandae. Molestias earum veniam voluptates itaque, aspernatur, asperiores nisi numquam cupiditate, sit animi quia assumenda nostrum! Voluptate veritatis dolor officiis quod natus optio sit explicabo iusto beatae sapiente. Molestiae obcaecati voluptates laborum animi eaque architecto tempora ullam ratione.</p>

                                    <div class="row justify-content-end">
                                        <div class="col-4 text-end">
                                            <button class="btn btn-primary">View More</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="my-books" style="margin-top: 6rem; margin-bottom: 6rem;">
            <div class="container bg-white p-5">
                <h5 class="font-weight-bold" p-2>My Books</h5>
                <hr class="m-0" style="height:2px; border-width:0; width: 7.5rem; background-color:#FF0000">

                <div class="mt-5">
                    <div class="row mb-4">
                        @foreach($my_books as $my_book)
                            <div class="col-sm-3">
                                <div class="card shadow-lg">
                                    <img src="{{ uploaded_asset($my_book->book_image)}}" class="card-img-top img-fluid" alt="..." style="object-fit:cover; height: 12rem; cursor: pointer;" data-toggle="modal" data-target="#exampleModal" onclick="view({{ $my_book->id }})">
                                    <div class="card-body p-2">
                                        <h5 class="card-title font-weight-bold" style="font-size: 0.9rem;">{{ $my_book->book_title }}</h5>
                                        <p class="card-text" style="font-size: 0.8rem; text-align: justify; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 5; -webkit-box-orient: vertical;">{{ $my_book->book_description }}</p>
                                    </div>
                                </div>
                                
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>


            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">

                        <div class="modal-body">
                            <div class="row">
                                <div class="col-6">
                                    <img src="" alt="" class="img-fluid w-100" id="view_image" style="height:290px; object-fit: cover;">
                                </div>

                                <div class="col-6">
                                    <h5 class="text-left" style="line-height: 30px;" id="view_title"></h5>

                                    <p style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 9; -webkit-box-orient: vertical; text-align: justify;" id="view_description"></p>

                                    <p class="text-left font-weight-bold" id="view_client_name"></p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <a href="" type="button" class="btn btn-primary search" >Search</a>
                        </div>

                    </div>
                </div>
            </div>

    </section>

@endsection

@push('after-scripts')
    <script>
        function view(id) {
            var settings = {
                "url": "{{url('/')}}/api/author-page/my-books/" + id,
                "method": "GET",
                "timeout": 0,
                "dataType": "json",
                };

            $.ajax(settings).done(function (response) {

                $('#view_image').attr('src', response['book_image']);
                $('#view_title').text(response['book_title']);
                $('#view_description').text(response['book_description']);

                if(response['search_store_link'] != 'Enabled') {
                    $('.search').addClass('d-none');
                } else {

                    let loc = "/search?q=" + response['book_title'];
                    $('.search').removeClass('d-none');
                    $('.search').prop('href', loc);
                }
            });
        }
    </script>

<script>
    $('.small-heart').on('click', function(){

        let status = $(this).find('.favourite').val();

        if(status == 'non-favourite') {
            $(this).find('button').removeClass('bi-heart');
            $(this).find('button').addClass('bi-heart-fill');
            $(this).find('.favourite').val('favourite');
        }
        else {
            $(this).find('button').removeClass('bi-heart-fill');
            $(this).find('button').addClass('bi-heart');
            $(this).find('.favourite').val('non-favourite');
        }
    });
</script>
@endpush