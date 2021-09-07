@extends('frontend.layouts.user_panel')

@section('panel_content')

    <div class="card">
        <div class="card-body" style="">
            <div style="margin-top: 100px;margin-bottom: 100px;">
                <div style="background-image: url('{{url('tag/notfound.jpg')}}');height: 300px;background-repeat: no-repeat;background-position: center;background-size: contain;"></div>
                <h2 style="text-align: center">This function not available</h2>
                <p style="text-align: center">This function available on next update </p>
            </div>
        </div>
    </div>


@endsection



