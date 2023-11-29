@extends('layouts.app')
@section('content')
<div class="col-12">
    <div class="card mb-4">
        <div class="card-header pb-0">
            <h6>{{ __('Dashboard') }}</h6>
        </div>
        <div class="card-body px-0 pt-0 pb-7">
            <div class="row">
                <div class="col-md-12 ms-4">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <p class="text-sm mb-4">
                        {{ __('You are logged in!') }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
