@extends('frontend.layouts.app')

@push('after-styles')
    <link rel="stylesheet" href="{{ static_asset('assets/css/publisher_page.css') }}">
@endpush

@section('content')

    <section class="author_page">
        <div class="container-fluid p-0">
            <img src="{{ url('assets/img/publisher/cover.png') }}" alt="" class="img-fluid w-100">
        </div>


        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-sm-2 profile-img">
                    <img src="{{ url('assets/img/publisher/profile.png') }}" class="position-absolute" alt="" style="top: -7rem;">
                </div>

                <div class="col-sm-7 profile-name">
                    <h3 class="font-weight-bold mb-0">Sarasavi Publishers</h3>
                </div>
            </div>
        </div>



        <div class="publisher" style="margin-top: 6rem; margin-bottom: 6rem;">

            <div class="container new-arrivals bg-white p-4">
                <h5 class="font-weight-bold">New Arrivals</h5>
                <hr class="m-0" style="height:2px; border-width:0; width: 9.5rem; background-color:#FF0000">

                <div class="mt-4">
                    <div class="row mb-4 justify-content-center">
                        <div class="col-12 col-sm">
                            <div class="row">
                                <div class="col-sm">
                                    <div class="card shadow-lg">
                                        <img src="{{ url('assets/img/publisher/senkottan.png') }}" class="card-img-top img-fluid" alt="...">
                                        <div class="card-body p-2">
                                            <h5 class="card-title font-weight-bold" style="font-size: 0.9rem;">Senkottan</h5>
                                            <p class="card-text" style="font-size: 0.8rem; text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta ea commodi saepe. Consequatur vitae ipsa, libero eum saepe earum blanditiis!</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm">
                                    <div class="card shadow-lg">
                                        <img src="{{ url('assets/img/publisher/senkottan.png') }}" class="card-img-top img-fluid" alt="...">
                                        <div class="card-body p-2">
                                            <h5 class="card-title font-weight-bold" style="font-size: 0.9rem;">Senkottan</h5>
                                            <p class="card-text" style="font-size: 0.8rem; text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta ea commodi saepe. Consequatur vitae ipsa, libero eum saepe earum blanditiis!</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm">
                                    <div class="card shadow-lg">
                                        <img src="{{ url('assets/img/publisher/senkottan.png') }}" class="card-img-top img-fluid" alt="...">
                                        <div class="card-body p-2">
                                            <h5 class="card-title font-weight-bold" style="font-size: 0.9rem;">Senkottan</h5>
                                            <p class="card-text" style="font-size: 0.8rem; text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta ea commodi saepe. Consequatur vitae ipsa, libero eum saepe earum blanditiis!</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm">
                                    <div class="card shadow-lg">
                                        <img src="{{ url('assets/img/publisher/senkottan.png') }}" class="card-img-top img-fluid" alt="...">
                                        <div class="card-body p-2">
                                            <h5 class="card-title font-weight-bold" style="font-size: 0.9rem;">Senkottan</h5>
                                            <p class="card-text" style="font-size: 0.8rem; text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta ea commodi saepe. Consequatur vitae ipsa, libero eum saepe earum blanditiis!</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm">
                                    <div class="card shadow-lg">
                                        <img src="{{ url('assets/img/publisher/senkottan.png') }}" class="card-img-top img-fluid" alt="...">
                                        <div class="card-body p-2">
                                            <h5 class="card-title font-weight-bold" style="font-size: 0.9rem;">Senkottan</h5>
                                            <p class="card-text" style="font-size: 0.8rem; text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta ea commodi saepe. Consequatur vitae ipsa, libero eum saepe earum blanditiis!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>

            <div class="container featured-books bg-white p-4 mt-5">
                <h5 class="font-weight-bold">Featured Books</h5>
                <hr class="m-0" style="height:2px; border-width:0; width: 11.5rem; background-color:#FF0000">

                <div class="mt-4">
                    <div class="row mb-4 justify-content-center">
                        <div class="col-12 col-sm">
                            <div class="row">
                                <div class="col-sm">
                                    <div class="card shadow-lg">
                                        <img src="{{ url('assets/img/publisher/senkottan.png') }}" class="card-img-top img-fluid" alt="...">
                                        <div class="card-body p-2">
                                            <h5 class="card-title font-weight-bold" style="font-size: 0.9rem;">Senkottan</h5>
                                            <p class="card-text" style="font-size: 0.8rem; text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta ea commodi saepe. Consequatur vitae ipsa, libero eum saepe earum blanditiis!</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm">
                                    <div class="card shadow-lg">
                                        <img src="{{ url('assets/img/publisher/senkottan.png') }}" class="card-img-top img-fluid" alt="...">
                                        <div class="card-body p-2">
                                            <h5 class="card-title font-weight-bold" style="font-size: 0.9rem;">Senkottan</h5>
                                            <p class="card-text" style="font-size: 0.8rem; text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta ea commodi saepe. Consequatur vitae ipsa, libero eum saepe earum blanditiis!</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm">
                                    <div class="card shadow-lg">
                                        <img src="{{ url('assets/img/publisher/senkottan.png') }}" class="card-img-top img-fluid" alt="...">
                                        <div class="card-body p-2">
                                            <h5 class="card-title font-weight-bold" style="font-size: 0.9rem;">Senkottan</h5>
                                            <p class="card-text" style="font-size: 0.8rem; text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta ea commodi saepe. Consequatur vitae ipsa, libero eum saepe earum blanditiis!</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm">
                                    <div class="card shadow-lg">
                                        <img src="{{ url('assets/img/publisher/senkottan.png') }}" class="card-img-top img-fluid" alt="...">
                                        <div class="card-body p-2">
                                            <h5 class="card-title font-weight-bold" style="font-size: 0.9rem;">Senkottan</h5>
                                            <p class="card-text" style="font-size: 0.8rem; text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta ea commodi saepe. Consequatur vitae ipsa, libero eum saepe earum blanditiis!</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm">
                                    <div class="card shadow-lg">
                                        <img src="{{ url('assets/img/publisher/senkottan.png') }}" class="card-img-top img-fluid" alt="...">
                                        <div class="card-body p-2">
                                            <h5 class="card-title font-weight-bold" style="font-size: 0.9rem;">Senkottan</h5>
                                            <p class="card-text" style="font-size: 0.8rem; text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta ea commodi saepe. Consequatur vitae ipsa, libero eum saepe earum blanditiis!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
