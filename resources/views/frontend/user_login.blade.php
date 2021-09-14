@extends('frontend.layouts.app')


@push('after-styles')
    <link rel="stylesheet" href="{{ url('assets/css/login.css') }}">
@endpush
    
@section('content')
    <section class="gry-bg">
        <div class="profile">
            <div class="container-fluid banner">
                <div class="container">
                    <div class="row" style="padding-top: 7rem;">
                        <div class="col-5">
                            <h5 class="text-white text-center">{{ translate('Login to your account.')}}</h5>
                            <form class="form-default" role="form" action="{{ route('login') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="email" class="form-label text-white mb-0 ml-3 form-label">Email</label>

                                    @if (\App\Addon::where('unique_identifier', 'otp_system')->first() != null && \App\Addon::where('unique_identifier', 'otp_system')->first()->activated)
                                        <input type="text" class="form-control text-white {{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" placeholder="{{ translate('Email Or Phone')}}" name="email" id="email">
                                    @else
                                        <input type="email" class="form-control text-white {{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" name="email" id="email" aria-describedby="email">
                                    @endif
                                    
                                    @if (\App\Addon::where('unique_identifier', 'otp_system')->first() != null && \App\Addon::where('unique_identifier', 'otp_system')->first()->activated)
                                        <span class="opacity-60">{{  translate('Use country code before number') }}</span>
                                    @endif
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label text-white mb-0 ml-3 form-label">Password</label>
                                    <input type="password" class="form-control text-white" id="password" name="password" aria-describedby="password">
                                </div>

                                <div class="row mb-4">
                                    <div class="col-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="radio" id="radio">
                                            <label class="form-check-label text-white" for="flexRadioDefault1">Remember Me</label>
                                        </div>
                                    </div>

                                    <div class="col-6 text-right">
                                        <a href="#" class="text-decoration-none text-white">Forgot Password?</a>
                                    </div>
                                </div>

                                <div>
                                    <button type="submit" class="btn login-btn w-100">Login</button>
                                </div>
                            </form>

                            <div class="row align-items-center mt-3">
                                <div class="col-5 pr-0">
                                    <hr class="m-0">
                                </div>
                                <div class="col-2 text-center">
                                    <p class="text-white mb-0">or</p>
                                </div>
                                <div class="col-5 pl-0">
                                    <hr class="m-0">
                                </div>
                            </div>

                            <div class="row justify-content-center mt-3">
                                <div class="col-6 text-center ">
                                    <p class="text-white mb-1" style="font-size: 0.8rem;">Don't have an account?</p>
                                    <a href="#" class="text-decoration-none text-white">Register Now</a>
                                </div>
                                
                            </div>
                        </div>

                        
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script type="text/javascript">
        function autoFillSeller(){
            $('#email').val('seller@example.com');
            $('#password').val('123456');
        }
        function autoFillCustomer(){
            $('#email').val('customer@example.com');
            $('#password').val('123456');
        }
        function autoFillDeliveryBoy(){
            $('#email').val('deliveryboy@example.com');
            $('#password').val('123456');
        }
    </script>

    <script>
        $('#email').focus(function() {
            $(this).siblings('label').addClass('click-input');
        });
        $('#email').focusout(function() {
            if($(this).val() == '' ) {
                $(this).siblings('label').removeClass('click-input');
            }
        });

        $('#password').focus(function() {
            $(this).siblings('label').addClass('click-input');
        });
        $('#password').focusout(function() {
            if($(this).val() == '' ) {
                $(this).siblings('label').removeClass('click-input');
            }
        });
    </script>
@endsection
