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
                            <h5 class="text-white text-center">{{ translate('Create an account.')}}</h5>
                            <form id="reg-form" class="form-default" role="form" action="{{ route('register') }}" method="POST">
                                        @csrf

                                <div class="mb-3">
                                    <label for="name" class="form-label text-white mb-0 ml-3 form-label">Full Name</label>
                                    <input type="text" class="form-control text-white {{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ old('name') }}" id="name" aria-describedby="name" name="name">
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                @if (\App\Addon::where('unique_identifier', 'otp_system')->first() != null && \App\Addon::where('unique_identifier', 'otp_system')->first()->activated)
                                    <div class="form-group phone-form-group mb-1">
                                        <input type="tel" id="phone-code" class="form-control text-white {{ $errors->has('phone') ? ' is-invalid' : '' }}" value="{{ old('phone') }}" placeholder="" name="phone" autocomplete="off">
                                    </div>

                                    <input type="hidden" name="country_code" value="">

                                    <div class="form-group email-form-group mb-1 d-none">
                                        <input type="email" class="form-control text-white {{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" placeholder="{{  translate('Email') }}" name="email"  autocomplete="off">
                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="form-group text-right">
                                        <button class="btn btn-link p-0 opacity-50 text-reset" type="button" onclick="toggleEmailPhone(this)">{{ translate('Use Email Instead') }}</button>
                                    </div>
                            @else
                                <div class="mb-3">
                                    <label for="email" class="form-label text-white mb-0 ml-3 form-label">{{  translate('Email') }}</label>
                                    <input type="email" class="form-control text-white {{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" id="email" aria-describedby="email" name="email">
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            @endif

                                <div class="mb-3">
                                    <label for="password" class="form-label text-white mb-0 ml-3 form-label">{{  translate('Password') }}</label>
                                    <input type="password" class="form-control text-white {{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" aria-describedby="password" name="password">
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="mb-3">
                                    <label for="confirm_password" class="form-label text-white mb-0 ml-3 form-label">{{ translate('Confirm Password') }}</label>
                                    <input type="password" class="form-control text-white" id="confirm_password" aria-describedby="confirm_password" name="password_confirmation">
                                </div>

                                <div class="row mb-4">
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="radio" id="radio">
                                            <label class="form-check-label text-white" for="flexRadioDefault1">{{ translate('By signing up you agree to our terms and conditions.')}}</label>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <button class="btn login-btn w-100">{{  translate('Create Account') }}</button>
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
                                    <p class="text-white mb-1" style="font-size: 0.8rem;">{{ translate('Already have an account?')}}</p>
                                    <a href="#" class="text-decoration-none text-white">{{ translate('Log In')}}</a>
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
    @if(get_setting('google_recaptcha') == 1)
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    @endif

    <script type="text/javascript">

        @if(get_setting('google_recaptcha') == 1)
        // making the CAPTCHA  a required field for form submission
        $(document).ready(function(){
            // alert('helloman');
            $("#reg-form").on("submit", function(evt)
            {
                var response = grecaptcha.getResponse();
                if(response.length == 0)
                {
                //reCaptcha not verified
                    alert("please verify you are humann!");
                    evt.preventDefault();
                    return false;
                }
                //captcha verified
                //do the rest of your validations here
                $("#reg-form").submit();
            });
        });
        @endif

        var isPhoneShown = true,
            countryData = window.intlTelInputGlobals.getCountryData(),
            input = document.querySelector("#phone-code");

        for (var i = 0; i < countryData.length; i++) {
            var country = countryData[i];
            if(country.iso2 == 'bd'){
                country.dialCode = '88';
            }
        }

        var iti = intlTelInput(input, {
            separateDialCode: true,
            utilsScript: "{{ static_asset('assets/js/intlTelutils.js') }}?1590403638580",
            onlyCountries: @php echo json_encode(\App\Country::where('status', 1)->pluck('code')->toArray()) @endphp,
            customPlaceholder: function(selectedCountryPlaceholder, selectedCountryData) {
                if(selectedCountryData.iso2 == 'bd'){
                    return "01xxxxxxxxx";
                }
                return selectedCountryPlaceholder;
            }
        });

        var country = iti.getSelectedCountryData();
        $('input[name=country_code]').val(country.dialCode);

        input.addEventListener("countrychange", function(e) {
            // var currentMask = e.currentTarget.placeholder;

            var country = iti.getSelectedCountryData();
            $('input[name=country_code]').val(country.dialCode);

        });

        function toggleEmailPhone(el){
            if(isPhoneShown){
                $('.phone-form-group').addClass('d-none');
                $('.email-form-group').removeClass('d-none');
                isPhoneShown = false;
                $(el).html('{{ translate('Use Phone Instead') }}');
            }
            else{
                $('.phone-form-group').removeClass('d-none');
                $('.email-form-group').addClass('d-none');
                isPhoneShown = true;
                $(el).html('{{ translate('Use Email Instead') }}');
            }
        }
    </script>

    <script>
        $('input').focus(function() {
            $(this).siblings('label').addClass('click-input');
        });
        $('input').focusout(function() {
            if($(this).val() == '' ) {
                $(this).siblings('label').removeClass('click-input');
            }
        });

        // $('#password').focus(function() {
        //     $(this).siblings('label').addClass('click-input');
        // });
        // $('#password').focusout(function() {
        //     if($(this).val() == '' ) {
        //         $(this).siblings('label').removeClass('click-input');
        //     }
        // });
    </script>
@endsection
