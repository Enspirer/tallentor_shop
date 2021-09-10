@extends('frontend.layouts.user_panel')

@section('panel_content')


    <div class="aiz-titlebar mt-2 mb-4">
      <div class="row align-items-center">
        <div class="col-md-6">
            <h1 class="h3">{{ translate('All Following Authors') }}</h1>
        </div>
      </div>
    </div>
   
    <div class="card">
        <form class="" id="sort_products" action="" method="GET">
            <div class="card-header row gutters-5">
                <div class="col">
                    <h5 class="mb-md-0 h6">{{ translate('Following Authors') }}</h5>
                </div>                
                                           
            </div>
        
            <div class="card-body">
                <table class="table aiz-table mb-0">
                    <thead>
                        <tr>
                            <th>{{translate('#ID')}}</th>
                            <th>{{translate('Profile Picture')}}</th>
                            <th data-breakpoints="lg">{{translate('Author Name')}}</th>
                            <th data-breakpoints="sm" class="text-right">{{translate('Options')}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($author_followers as $key => $followers)
                        <tr>
                            <td>{{$followers->id}}</td>

                            @if(App\Models\Author::where('id',$followers->author_id)->first())
                                <td>
                                    @if(App\Models\Author::where('id',$followers->author_id)->first()->profile_picture == null)
                                        <p>No Image</p>
                                    @else
                                        <div class="row">
                                            <div class="col-auto">
                                                <img src="{{ uploaded_asset(App\Models\Author::where('id',$followers->author_id)->first()->profile_picture)}}" alt="Image" class="size-60px img-fit">
                                            </div>                                
                                        </div>
                                    @endif                                
                                </td>
                            @else
                                <td><P style="color:red">Author is No Longer Available</p></td>
                            @endif

                            @if(App\Models\Author::where('id',$followers->author_id)->first())
                                <td>{{ App\Models\Author::where('id',$followers->author_id)->first()->author_name }}</td>
                            @else
                                <td><P style="color:red">Author is No Longer Available</p></td>
                            @endif

                            <td class="text-right">  

                            @if(App\Models\Author::where('id',$followers->author_id)->first())                                                   
                                <a class="btn btn-soft-info btn-icon btn-circle btn-sm" href="{{route('author_page', ['id'=>App\Models\Author::where('id',$followers->author_id)->first()->id, 'lang'=>env('DEFAULT_LANGUAGE')] )}}" title="{{ translate('Author') }}">
                                    <i class="las la-user-circle"></i>
                                </a>
                            @endif
                                <a href="#" class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete" data-href="{{route('author_followers.destroy', $followers->id)}}" title="{{ translate('Delete') }}">
                                    <i class="las la-trash"></i>
                                </a>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="aiz-pagination">
                    {{ $author_followers->links() }}
                </div>
            </div>
        </form>
    </div>

@endsection


@section('modal')
    @include('modals.delete_modal')
@endsection
