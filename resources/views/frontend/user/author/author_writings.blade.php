@extends('frontend.layouts.user_panel')

@section('panel_content')



<div class="aiz-titlebar mt-2 mb-4">
      <div class="row align-items-center">
        <div class="col-md-6">
            <h1 class="h3">{{ translate('My Wtitings') }}</h1>
        </div>
      </div>
    </div>

    @if($author_details->status == 'Pending')
        <div class="row gutters-10 justify-content-center">
            <div class="col-md-12 mx-auto mb-3">
                <div class="p-3 rounded mb-3 text-center bg-white shadow-sm hov-shadow-lg has-transition">
                    <h5 style="color:red;">Waiting for Admin Approval</h5>
                </div>
            </div>
        </div> 
    @endif
    

    <div class="row gutters-10 justify-content-center">
        <div class="col-md-4 mx-auto mb-3" >
            <a href="{{ route('author_writings.create')}}">
              <div class="p-3 rounded mb-3 c-pointer text-center bg-white shadow-sm hov-shadow-lg has-transition">
                  <span class="size-60px rounded-circle mx-auto bg-secondary d-flex align-items-center justify-content-center mb-3">
                      <i class="las la-plus la-3x text-white"></i>
                  </span>
                  <div class="fs-18 text-primary">{{ translate('Write Your Post Here') }}</div>
              </div>
            </a>
        </div>
    </div>    

    <div class="card">
        <form class="" id="sort_products" action="" method="GET">
            <div class="card-header row gutters-5">
                <div class="col">
                    <h5 class="mb-md-0 h6">{{ translate('All Posts') }}</h5>
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
                            <th>{{translate('Feature Image')}}</th>
                            <th>{{translate('Title')}}</th>
                            <th data-breakpoints="lg">{{translate('Status')}}</th>
                            <th data-breakpoints="sm" class="text-right">{{translate('Options')}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($my_writings as $key => $writings)
                        <tr>
                            
                           
                            <td>{{$writings->id}}</td>
                            <td>
                                @if($writings->feature_image == null)
                                    <p>No Image</p>
                                @else
                                    <div class="row">
                                        <div class="col-auto">
                                            <img src="{{ uploaded_asset($writings->feature_image)}}" alt="Image" class="size-60px img-fit">
                                        </div>                                
                                    </div>
                                @endif                                
                            </td>
                            <td>{{$writings->title}}</td>
                            <td>{{$writings->status}}</td>

                            <td class="text-right">                                                        
                                <a class="btn btn-soft-info btn-icon btn-circle btn-sm" href="{{route('author_writings.edit', ['id'=>$writings->id, 'lang'=>env('DEFAULT_LANGUAGE')] )}}" title="{{ translate('Edit') }}">
                                    <i class="las la-edit"></i>
                                </a>
                                <a href="#" class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete" data-href="{{route('author_writings.destroy', $writings->id)}}" title="{{ translate('Delete') }}">
                                    <i class="las la-trash"></i>
                                </a>
                            </td>
                            
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="aiz-pagination">
                    {{ $my_writings->links() }}
                </div>
            </div>
        </form>
    </div>


@endsection

@section('modal')
    @include('modals.delete_modal')
@endsection

