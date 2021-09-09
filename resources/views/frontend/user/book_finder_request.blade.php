@extends('frontend.layouts.user_panel')

@section('panel_content')


    <div class="aiz-titlebar mt-2 mb-4">
      <div class="row align-items-center">
        <div class="col-md-6">
            <h1 class="h3">{{ translate('All Book Finder Request') }}</h1>
        </div>
      </div>
    </div>
   
    <div class="card">
        <form class="" id="sort_products" action="" method="GET">
            <div class="card-header row gutters-5">
                <div class="col">
                    <h5 class="mb-md-0 h6">{{ translate('Book Finder Request') }}</h5>
                </div>                
                                           
            </div>
        
            <div class="card-body">
                <table class="table aiz-table mb-0">
                    <thead>
                        <tr>
                            <th>{{translate('#ID')}}</th>
                            <th>{{translate('Book Name')}}</th>
                            <th data-breakpoints="lg">{{translate('Author Name')}}</th>
                            <th data-breakpoints="lg">{{translate('Book Type')}}</th>
                            <th data-breakpoints="lg">{{translate('Status')}}</th>
                            <th data-breakpoints="sm" class="text-right">{{translate('Options')}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($book_finder_request as $key => $book_finder)
                        <tr>
                            <td>{{$book_finder->id}}</td>
                            <td>{{$book_finder->book_name}}</td>
                            <td>{{$book_finder->author_name}}</td>
                            <td>{{$book_finder->book_type}}</td>
                            <td>{{$book_finder->status}}</td>

                            <td class="text-right">                                                        
                                <a class="btn btn-soft-info btn-icon btn-circle btn-sm" href="{{route('book_finder_request.edit', ['id'=>$book_finder->id, 'lang'=>env('DEFAULT_LANGUAGE')] )}}" title="{{ translate('Edit') }}">
                                    <i class="las la-edit"></i>
                                </a>
                                <a href="#" class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete" data-href="{{route('book_finder_request.destroy', $book_finder->id)}}" title="{{ translate('Delete') }}">
                                    <i class="las la-trash"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="aiz-pagination">
                    {{ $book_finder_request->links() }}
                </div>
            </div>
        </form>
    </div>

@endsection


@section('modal')
    @include('modals.delete_modal')
@endsection
