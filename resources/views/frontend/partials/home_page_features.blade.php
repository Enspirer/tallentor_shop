


<div class="" style="margin-top: 50px;">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body" style="text-align: center">
                    <h5> {{ translate('Shop by Store') }}</h5><br>
                        <figure class="c4-izmir c4-border-corners-1 c4-image-zoom-out c4-gradient-bottom" tabindex="0" style="--primary-color: #000000;--secondary-color: #000000;--text-color: #f0f0f0;--border-color: #ffffff;--image-opacity: 60%;width: 100%;">
                            <img src="{{url('tag/ShopbyStore.jpg')}}" alt="Sample Image">
                            <figcaption class="c4-layout-top-left">


                                <div class="c4-reveal-down">
                                    <div>
                                        <h2 style="margin-bottom: 5px;">
                                            {{ translate('Shop by Store') }}
                                        </h2>
                                        <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.</p>
                                        <a href="{{ route('sellers') }}" class="btn btn-primary">View Stores</a>
                                    </div>
                                </div>
                            </figcaption>
                        </figure><br>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body" style="text-align: center">
                        <h5>{{ translate('Shop by Category') }}</h5><br>
                        <figure class="c4-izmir c4-border-corners-1 c4-image-zoom-out c4-gradient-bottom" tabindex="0" style="--primary-color: #000000;--secondary-color: #000000;--text-color: #f0f0f0;--border-color: #ffffff;--image-opacity: 60%;width: 100%;">
                            <img src="{{url('tag/ShopbyCategory.jpg')}}" alt="Sample Image">
                            <figcaption class="c4-layout-top-left">
                                <div class="c4-reveal-down">
                                    <div>
                                        <h2 style="margin-bottom: 5px;">
                                            {{ translate('Shop by Category') }}
                                        </h2>
                                        <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.</p>
                                        <a href="{{ route('categories.all') }}" class="btn btn-primary">View Categories</a>
                                    </div>
                                </div>
                            </figcaption>
                        </figure><br>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body" style="text-align: center">
                        <h5> {{ translate('Ask the Book Finder') }}</h5><br>
                        <figure class="c4-izmir c4-border-corners-1 c4-image-zoom-out c4-gradient-bottom" tabindex="0" style="--primary-color: #000000;--secondary-color: #000000;--text-color: #f0f0f0;--border-color: #ffffff;--image-opacity: 60%;width: 100%;">
                            <img src="{{url('tag/AsktheBookFinder.jpg')}}" alt="Sample Image">
                            <figcaption class="c4-layout-top-left">
                                <div class="c4-reveal-down">
                                    <div>
                                        <h2 style="margin-bottom: 5px;">
                                            {{ translate('Ask the Book Finder') }}
                                        </h2>
                                        <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.</p>
                                        
                                        @auth
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                                                Click Here
                                            </button>
                                        @else
                                            <a href="{{ route('user.login') }}" type="button" class="btn btn-primary">{{ translate('Click Here')}}</a>                                                
                                        @endauth
                                    </div>
                                </div>
                            </figcaption>
                        </figure><br>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body" style="text-align: center">
                        <h5>{{ translate('Visit the Book Fair') }}</h5><br>
                        <figure class="c4-izmir c4-border-corners-1 c4-image-zoom-out c4-gradient-bottom" tabindex="0" style="--primary-color: #000000;--secondary-color: #000000;--text-color: #f0f0f0;--border-color: #ffffff;--image-opacity: 60%;width: 100%;">
                            <img src="{{url('tag/VisittheBookFair.jpg')}}" alt="Sample Image">
                            <figcaption class="c4-layout-top-left">
                                <div class="c4-reveal-down">
                                    <div>
                                        <h2 style="margin-bottom: 5px;">
                                            {{ translate('Visit the Book Fair') }}
                                        </h2>
                                        <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.</p>
                                        
                                        <a href="{{ route('book_fair') }}" class="btn btn-primary">Click Here</a>
                                    </div>
                                </div>
                            </figcaption>
                        </figure><br>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body" style="text-align: center">
                        <h5>{{ translate('Pre Loved Book') }}</h5><br>
                        <figure class="c4-izmir c4-border-corners-1 c4-image-zoom-out c4-gradient-bottom" tabindex="0" style="--primary-color: #000000;--secondary-color: #000000;--text-color: #f0f0f0;--border-color: #ffffff;--image-opacity: 60%;width: 100%;">
                            <img src="{{url('tag/bookpanel.jpg')}}" alt="Sample Image">
                            <figcaption class="c4-layout-top-left">
                                <div class="c4-reveal-down">
                                    <div>
                                        <h2 style="margin-bottom: 5px;">
                                            {{ translate('Pre Loved Book') }}
                                        </h2>
                                        <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.</p>
                                        
                                        <a href="{{ route('pre_loved_book') }}" class="btn btn-primary">Click Here</a>
                                    </div>
                                </div>
                            </figcaption>
                        </figure><br>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body" style="text-align: center">
                        <h5>{{ translate('Gift Cards') }}</h5><br>
                        <figure class="c4-izmir c4-border-corners-1 c4-image-zoom-out c4-gradient-bottom" tabindex="0" style="--primary-color: #000000;--secondary-color: #000000;--text-color: #f0f0f0;--border-color: #ffffff;--image-opacity: 60%;width: 100%;">
                            <img src="{{url('tag/GiftCards.jpg')}}" alt="Sample Image">
                            <figcaption class="c4-layout-top-left">
                                <div class="c4-reveal-down">
                                    <div>
                                        <h2 style="margin-bottom: 5px;">
                                            {{ translate('Gift Cards') }}
                                        </h2>
                                        <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.</p>
                                    
                                        <a href="{{ route('gift_cards') }}" class="btn btn-primary">Click Here</a>
                                    </div>
                                </div>
                            </figcaption>
                        </figure><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body" style="text-align: center">
                <figure class="c4-izmir c4-border-corners-1 c4-image-zoom-out c4-gradient-bottom" tabindex="0" style="--primary-color: #000000;--secondary-color: #000000;--text-color: #f0f0f0;--border-color: #ffffff;--image-opacity: 60%;width: 100%;">
                    <img src="{{url('tag/bs_store.jpg')}}" alt="Sample Image">
                    <figcaption class="c4-layout-top-left">
                        <div class="c4-reveal-down">
                            <div>
                                <h2 style="margin-bottom: 5px;">
                                    {{ translate('BS Store') }}
                                </h2>
                                <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.</p>
                            </div>
                        </div>
                    </figcaption>
                </figure><br>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-body" style="text-align: center">
                <figure class="c4-izmir c4-border-corners-1 c4-image-zoom-out c4-gradient-bottom" tabindex="0" style="--primary-color: #000000;--secondary-color: #000000;--text-color: #f0f0f0;--border-color: #ffffff;--image-opacity: 60%;width: 100%;">
                    <img src="{{url('tag/statony.jpg')}}" alt="Sample Image">
                    <figcaption class="c4-layout-top-left">
                        <div class="c4-reveal-down">
                            <div>
                                <h2 style="margin-bottom: 5px;">
                                    {{ translate('Stationary Items') }}
                                </h2>
                                <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.</p>
                            </div>
                        </div>
                    </figcaption>
                </figure><br>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
        <form action="{{ route('book_finder_request.store') }}" method="post">
        {{csrf_field()}}
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Book Finder Request</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="form-group row">
                    <label class="col-md-3 col-form-label">
                        {{translate('Book Name :')}}
                        <span class="text-danger">*</span>
                    </label>
                    <div class="col-md-9">
                        <input type="text" id="book_name" name="book_name" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 col-form-label">
                        {{translate('Author Name :')}}
                        <span class="text-danger">*</span>
                    </label>
                    <div class="col-md-9">
                        <input type="text" id="author_name" name="author_name" class="form-control" required>
                    </div>
                </div> 
                <div class="form-group row">
                    <label class="col-md-3 col-form-label">
                        {{translate('Publisher Name :')}}
                        <span class="text-danger">*</span>
                    </label>
                    <div class="col-md-9">
                        <input type="text" id="publisher_name" name="publisher_name" class="form-control" required>
                    </div>
                </div> 
                <div class="form-group row">
                    <label class="col-md-3 col-form-label">
                        {{translate('Book Type :')}}
                        <span class="text-danger">*</span>
                    </label>
                    <div class="col-md-9">
                        <input type="text" id="book_type" name="book_type" class="form-control" required>
                    </div>
                </div>  


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Send Request</button>
            </div>
        </form>  
    </div>
  </div>
</div>
   