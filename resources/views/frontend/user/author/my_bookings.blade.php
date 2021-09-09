@extends('frontend.layouts.user_panel')

@section('panel_content')

    <!-- <div class="card">
        <div class="card-body" style="">
            <div style="margin-top: 100px;margin-bottom: 100px;">
                <div style="background-image: url('{{url('tag/notfound.jpg')}}');height: 300px;background-repeat: no-repeat;background-position: center;background-size: contain;"></div>
                <h2 style="text-align: center">This function not available</h2>
                <p style="text-align: center">This function available on next update </p>
            </div>
        </div>
    </div> -->

    <div class="aiz-titlebar mt-2 mb-4">
      <div class="row align-items-center">
        <div class="col-md-6">
            <h1 class="h3">{{ translate('My Books') }}</h1>
        </div>
      </div>
    </div>

    <div class="row gutters-10 justify-content-center">
        <div class="col-md-4 mx-auto mb-3" >
            <a href="{{ route('my_books.create')}}">
              <div class="p-3 rounded mb-3 c-pointer text-center bg-white shadow-sm hov-shadow-lg has-transition">
                  <span class="size-60px rounded-circle mx-auto bg-secondary d-flex align-items-center justify-content-center mb-3">
                      <i class="las la-plus la-3x text-white"></i>
                  </span>
                  <div class="fs-18 text-primary">{{ translate('Add New') }}</div>
              </div>
            </a>
        </div>
    </div>    

    <div class="card">
        <form class="" id="sort_products" action="" method="GET">
            <div class="card-header row gutters-5">
                <div class="col">
                    <h5 class="mb-md-0 h6">{{ translate('My All Books') }}</h5>
                </div>                
                                
                <!-- <div class="col-md-3">
                    <form class="" id="sort_categories" action="" method="GET">
                        <div class="box-inline pad-rgt pull-left">
                            <div class="" style="min-width: 200px;">
                                <input type="text" class="form-control" id="search" name="search"@isset($sort_search) value="{{ $sort_search }}" @endisset placeholder="{{ translate('Type name & Enter') }}">
                            </div>
                        </div>
                    </form>
                </div> -->
               
            </div>
        
            <div class="card-body">
                <table class="table aiz-table mb-0">
                    <thead>
                        <tr>
                            <th>{{translate('#ID')}}</th>
                            <th>{{translate('Book Image')}}</th>
                            <th>{{translate('Title')}}</th>
                            <th data-breakpoints="lg">{{translate('Order')}}</th>
                            <th data-breakpoints="lg">{{translate('Status')}}</th>
                            <th data-breakpoints="sm" class="text-right">{{translate('Options')}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($my_books as $key => $my_book)
                        <tr>
                            
                           
                            <td>{{$my_book->id}}</td>
                            <td>
                                <div class="row">
                                    <div class="col-auto">
                                        <img src="{{ uploaded_asset($my_book->book_image)}}" alt="Image" class="size-60px img-fit">
                                    </div>                                
                                </div>
                            </td>
                            <td>{{$my_book->book_title}}</td>
                            <td>{{$my_book->order}}</td>
                            <td>{{$my_book->status}}</td>

                            <td class="text-right">
                                                        
                                <a class="btn btn-soft-info btn-icon btn-circle btn-sm" href="{{route('my_books.edit', ['id'=>$my_book->id, 'lang'=>env('DEFAULT_LANGUAGE')] )}}" title="{{ translate('Edit') }}">
                                    <i class="las la-edit"></i>
                                </a>
                                <a href="#" class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete" data-href="{{route('my_books.destroy', $my_book->id)}}" title="{{ translate('Delete') }}">
                                    <i class="las la-trash"></i>
                                </a>
                            </td>
                            
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="aiz-pagination">
                    {{ $my_books->links() }}
                </div>
            </div>
        </form>
    </div>

@endsection


@section('modal')
    @include('modals.delete_modal')
@endsection
