@extends('layouts.guest')
@section('content')
<main class="main-content mt-0">
    <section>
        <div class="page-header min-vh-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
                        <div class="card card-plain">
                            <div class="card-header pb-0 text-start">
                                <h4 class="font-weight-bolder">{{ __('Reset Password') }}</h4>
                                <p class="mb-0">{{ __('Set a new password for your email') }}</p>
                            </div>
                            <div class="card-body">
                                <form role="form" method="POST" action="{{ route('password.update') }}">
                                    @csrf
                                    <input type="hidden" name="token" value="{{ $token }}" />
                                    <div class="flex flex-col mb-3">
                                        <input id="email" type="email" name="email" class="form-control form-control-lg @error('email') is-invalid @enderror" placeholder="{{ __('Email') }}" value="{{ $email ?? old('email') }}" aria-label="{{ __('Email') }}" required autocomplete="email" autofocus/>
                                        @error('email')
                                        <p class="text-danger text-xs pt-1">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="flex flex-col mb-3">
                                        <input id="password" type="password" name="password" class="form-control form-control-lg @error('password') is-invalid @enderror" placeholder="{{ __('Password') }}" aria-label="{{ __('Password') }}" required autocomplete="new-password"/>
                                        @error('password')
                                        <p class="text-danger text-xs pt-1">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="flex flex-col mb-3">
                                        <input id="password-confirm" type="password" name="password_confirmation" class="form-control form-control-lg" placeholder="{{ __('Password') }}" aria-label="{{ __('Password') }}" required autocomplete="new-password"/>
                                        @error('confirm-password')
                                        <p class="text-danger text-xs pt-1">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">{{ __('Reset Password') }}</button>
                                    </div>
                                </form>
                            </div>
                            <div id="alert">
                                @include('layouts.alert')
                            </div>
                        </div>
                    </div>
                    @include('layouts.banner')
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
