@extends('frontend.layouts.app')

@section('content')

    <section class="author_page">
        <div class="container-fluid p-0">
            <img src="{{ url('assets/img/author/author_page_banner.png') }}" alt="" class="img-fluid w-100">
        </div>


        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-2">
                    <img src="{{ url('assets/img/author/profile_image.png') }}" class="position-absolute" alt="" style="top: -7rem;">
                </div>

                <div class="col-6">
                    <h3 class="font-weight-bold mb-0">Aleska Mandalin</h3>
                </div>

                <div class="col-3">
                    <div class="row align-items-center">
                        <div class="col-8 text-right">
                            <button class="btn shadow-lg" style="border-radius: 1rem;">468 Followers</button>
                        </div>
                        <div class="col-4">
                        <button class="bi bi-heart-fill border-0 shadow-lg px-3" type="submit" style="border-radius: 1rem; font-size: 1.5rem; display: block; color: #FF6243"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container" style="margin-top: 5rem;">
            <div class="row">
                <div class="col-3">
                    <h5>Contact Details</h5>
                    <hr class="m-0" style="height:2px; border-width:0; width: 7.5rem; background-color:#FF0000">

                    <div class="row align-items-center mt-3 pl-4">
                        <div class="col-2">
                            <img src="{{ url('assets/img/author/call.png') }}" alt="">
                        </div>
                        <div class="col-10">
                            <p class="mb-0">077 71 41 102</p>
                        </div>
                    </div>

                    <div class="row mt-2 align-items-center pl-4">
                        <div class="col-2">
                            <img src="{{ url('assets/img/author/mail.png') }}" alt="">
                        </div>
                        <div class="col-10">
                            <p class="mb-0">user@gmail.com</p>
                        </div>
                    </div>
                </div>

                <div class="col-8">
                    <h5>Bio</h5>
                    <hr class="m-0" style="height:2px; border-width:0; width: 5.5rem; background-color:#FF0000">

                    <p class="mt-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere repudiandae molestias est vel aspernatur molestiae officia? Sed velit amet nemo tempora officia nam in, optio consectetur ad totam ex quasi reprehenderit odio neque aliquam, perferendis dolorum rem minima recusandae. Iste harum fugiat asperiores, quisquam animi sequi rem at obcaecati! Alias?</p>
                </div>
            </div>
        </div>

        <div class="my-books" style="margin-top: 6rem;">
            <div class="container">
                <h5>My Books</h5>
                <hr class="m-0" style="height:2px; border-width:0; width: 7.5rem; background-color:#FF0000">

                <div class="mt-5">
                    <div class="row mb-4">
                        <div class="col">
                            <div class="card shadow-lg">
                                <img src="{{ url('assets/img/author/book.png') }}" class="card-img-top img-fluid" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title font-weight-bold" style="font-size: 0.9rem;">The Hacking</h5>
                                    <p class="card-text" style="font-size: 0.8rem; text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta ea commodi saepe. Consequatur vitae ipsa, libero eum saepe earum blanditiis!</p>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card shadow-lg">
                                <img src="{{ url('assets/img/author/book.png') }}" class="card-img-top img-fluid" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title font-weight-bold" style="font-size: 0.9rem;">The Hacking</h5>
                                    <p class="card-text" style="font-size: 0.8rem; text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta ea commodi saepe. Consequatur vitae ipsa, libero eum saepe earum blanditiis!</p>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card shadow-lg">
                                <img src="{{ url('assets/img/author/book.png') }}" class="card-img-top img-fluid" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title font-weight-bold" style="font-size: 0.9rem;">The Hacking</h5>
                                    <p class="card-text" style="font-size: 0.8rem; text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta ea commodi saepe. Consequatur vitae ipsa, libero eum saepe earum blanditiis!</p>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card shadow-lg">
                                <img src="{{ url('assets/img/author/book.png') }}" class="card-img-top img-fluid" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title font-weight-bold" style="font-size: 0.9rem;">The Hacking</h5>
                                    <p class="card-text" style="font-size: 0.8rem; text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta ea commodi saepe. Consequatur vitae ipsa, libero eum saepe earum blanditiis!</p>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card shadow-lg">
                                <img src="{{ url('assets/img/author/book.png') }}" class="card-img-top img-fluid" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title font-weight-bold" style="font-size: 0.9rem;">The Hacking</h5>
                                    <p class="card-text" style="font-size: 0.8rem; text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta ea commodi saepe. Consequatur vitae ipsa, libero eum saepe earum blanditiis!</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col">
                            <div class="card shadow-lg">
                                <img src="{{ url('assets/img/author/book.png') }}" class="card-img-top img-fluid" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title font-weight-bold" style="font-size: 0.9rem;">The Hacking</h5>
                                    <p class="card-text" style="font-size: 0.8rem; text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta ea commodi saepe. Consequatur vitae ipsa, libero eum saepe earum blanditiis!</p>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card shadow-lg">
                                <img src="{{ url('assets/img/author/book.png') }}" class="card-img-top img-fluid" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title font-weight-bold" style="font-size: 0.9rem;">The Hacking</h5>
                                    <p class="card-text" style="font-size: 0.8rem; text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta ea commodi saepe. Consequatur vitae ipsa, libero eum saepe earum blanditiis!</p>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card shadow-lg">
                                <img src="{{ url('assets/img/author/book.png') }}" class="card-img-top img-fluid" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title font-weight-bold" style="font-size: 0.9rem;">The Hacking</h5>
                                    <p class="card-text" style="font-size: 0.8rem; text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta ea commodi saepe. Consequatur vitae ipsa, libero eum saepe earum blanditiis!</p>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card shadow-lg">
                                <img src="{{ url('assets/img/author/book.png') }}" class="card-img-top img-fluid" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title font-weight-bold" style="font-size: 0.9rem;">The Hacking</h5>
                                    <p class="card-text" style="font-size: 0.8rem; text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta ea commodi saepe. Consequatur vitae ipsa, libero eum saepe earum blanditiis!</p>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card shadow-lg">
                                <img src="{{ url('assets/img/author/book.png') }}" class="card-img-top img-fluid" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title font-weight-bold" style="font-size: 0.9rem;">The Hacking</h5>
                                    <p class="card-text" style="font-size: 0.8rem; text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta ea commodi saepe. Consequatur vitae ipsa, libero eum saepe earum blanditiis!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
