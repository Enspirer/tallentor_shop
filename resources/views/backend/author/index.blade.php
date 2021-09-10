@extends('backend.layouts.app')

@section('content')

<div class="aiz-titlebar text-left mt-2 mb-3">
    <div class="row align-items-center">
        <div class="col-auto">
            <h1 class="h3">{{translate('All Authors')}}</h1>
        </div>       
    </div>
</div>
<br>

<div class="card">
    <form class="" id="sort_products" action="" method="GET">
        <div class="card-header row gutters-5">
            <div class="col">
                <h5 class="mb-md-0 h6">{{ translate('Authors') }}</h5>
            </div>
            
            <!-- <div class="dropdown mb-2 mb-md-0">
                <button class="btn border dropdown-toggle" type="button" data-toggle="dropdown">
                    {{translate('Bulk Action')}}
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#" onclick="bulk_delete()"> {{translate('Delete selection')}}</a>
                </div>
            </div> -->
            
            <div class="col-md-2">
                <form class="" id="sort_categories" action="" method="GET">
                    <div class="box-inline pad-rgt pull-left">
                        <div class="" style="min-width: 200px;">
                            <input type="text" class="form-control" id="search" name="search"@isset($sort_search) value="{{ $sort_search }}" @endisset placeholder="{{ translate('Type name & Enter') }}">
                        </div>
                    </div>
                </form>

            </div>
        </div>
    
        <div class="card-body">
            <table class="table aiz-table mb-0">
                <thead>
                    <tr>
                        <!-- <th>
                            <div class="form-group">
                                <div class="aiz-checkbox-inline">
                                    <label class="aiz-checkbox">
                                        <input type="checkbox" class="check-all">
                                        <span class="aiz-square-check"></span>
                                    </label>
                                </div>
                            </div>
                        </th> -->
                        <!--<th data-breakpoints="lg">#</th>-->
                        <th>{{translate('#ID')}}</th>
                        <th>{{translate('Profile Picture')}}</th>
                        <th>{{translate('Name')}}</th>
                        <th data-breakpoints="lg">{{translate('Email Address')}}</th>
                        <th data-breakpoints="lg">{{translate('Phone')}}</th>
                        <th data-breakpoints="lg">{{translate('Status')}}</th>
                        <th data-breakpoints="sm" class="text-right">{{translate('Options')}}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($authors as $key => $author)
                    <tr>
                        
                        <!-- <td>
                            <div class="form-group d-inline-block">
                                <label class="aiz-checkbox">
                                    <input type="checkbox" class="check-one" name="id[]" value="{{$author->id}}">
                                    <span class="aiz-square-check"></span>
                                </label>
                            </div>
                        </td>                         -->
                        <td>{{$author->id}}</td>
                        <td>
                            <div class="row">
                                <div class="col-auto">
                                    <img src="{{ uploaded_asset($author->profile_picture)}}" alt="Image" class="size-60px img-fit">
                                </div>                                
                            </div>
                        </td>
                        <td>{{$author->author_name}}</td>
                        <td>{{$author->email}}</td>
                        <td>{{$author->contact_number}}</td>
                        <td>{{$author->status}}</td>

                        <td class="text-right">
                               
                            
                            <a class="btn btn-soft-success btn-icon btn-circle btn-sm" href="{{route('admin.books', ['id'=>$author->id, 'lang'=>env('DEFAULT_LANGUAGE')] )}}" title="{{ translate('Books') }}">
                                <i class="las la-book"></i>
                            </a>
                            <a class="btn btn-soft-warning btn-icon btn-circle btn-sm" href="{{route('admin.author_writings_backend', ['id'=>$author->id, 'lang'=>env('DEFAULT_LANGUAGE')] )}}" title="{{ translate('Posts') }}">
                                <i class="las la-newspaper"></i>
                            </a>
                            <a class="btn btn-soft-primary btn-icon btn-circle btn-sm" href="{{route('author.edit', ['id'=>$author->id, 'lang'=>env('DEFAULT_LANGUAGE')] )}}" title="{{ translate('Edit') }}">
                                <i class="las la-edit"></i>
                            </a>
                            <a href="#" class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete" data-href="{{route('author.destroy', $author->id)}}" title="{{ translate('Delete') }}">
                                <i class="las la-trash"></i>
                            </a>
                        </td>
                        
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="aiz-pagination">
                {{ $authors->links() }}
            </div>
        </div>
    </form>
</div>

@endsection

@section('modal')
    @include('modals.delete_modal')
@endsection


@section('script')
    <script type="text/javascript">
        
        $(document).on("change", ".check-all", function() {
            if(this.checked) {
                // Iterate each checkbox
                $('.check-one:checkbox').each(function() {
                    this.checked = true;                        
                });
            } else {
                $('.check-one:checkbox').each(function() {
                    this.checked = false;                       
                });
            }
          
        });

        $(document).ready(function(){
            //$('#container').removeClass('mainnav-lg').addClass('mainnav-sm');
        });

        function update_todays_deal(el){
            if(el.checked){
                var status = 1;
            }
            else{
                var status = 0;
            }
            $.post('{{ route('products.todays_deal') }}', {_token:'{{ csrf_token() }}', id:el.value, status:status}, function(data){
                if(data == 1){
                    AIZ.plugins.notify('success', '{{ translate('Todays Deal updated successfully') }}');
                }
                else{
                    AIZ.plugins.notify('danger', '{{ translate('Something went wrong') }}');
                }
            });
        }

        function update_published(el){
            if(el.checked){
                var status = 1;
            }
            else{
                var status = 0;
            }
            $.post('{{ route('products.published') }}', {_token:'{{ csrf_token() }}', id:el.value, status:status}, function(data){
                if(data == 1){
                    AIZ.plugins.notify('success', '{{ translate('Published products updated successfully') }}');
                }
                else{
                    AIZ.plugins.notify('danger', '{{ translate('Something went wrong') }}');
                }
            });
        }

        function update_featured(el){
            if(el.checked){
                var status = 1;
            }
            else{
                var status = 0;
            }
            $.post('{{ route('products.featured') }}', {_token:'{{ csrf_token() }}', id:el.value, status:status}, function(data){
                if(data == 1){
                    AIZ.plugins.notify('success', '{{ translate('Featured products updated successfully') }}');
                }
                else{
                    AIZ.plugins.notify('danger', '{{ translate('Something went wrong') }}');
                }
            });
        }

        function sort_products(el){
            $('#sort_products').submit();
        }
        
        function bulk_delete() {
            var data = new FormData($('#sort_products')[0]);
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{route('bulk-product-delete')}}",
                type: 'POST',
                data: data,
                cache: false,
                contentType: false,
                processData: false,
                success: function (response) {
                    if(response == 1) {
                        location.reload();
                    }
                }
            });
        }

    </script>
@endsection
