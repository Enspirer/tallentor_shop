@extends('backend.layouts.app')

@section('content')


<div class="card">
    <form class="" id="sort_products" action="" method="GET">
        <div class="card-header row gutters-5">
            <div class="col">
                <h5 class="mb-md-0 h6">{{ translate('Posts') }}</h5>
            </div>
                        
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
                                <a class="btn btn-soft-info btn-icon btn-circle btn-sm" href="{{route('author_writings_backend.edit', ['id'=>$writings->id, 'lang'=>env('DEFAULT_LANGUAGE')] )}}" title="{{ translate('Edit') }}">
                                    <i class="las la-edit"></i>
                                </a>
                                <a href="#" class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete" data-href="{{route('author_writings_backend.destroy', $writings->id)}}" title="{{ translate('Delete') }}">
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


