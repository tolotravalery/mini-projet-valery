@extends('layouts.app')

@section('content')
    <p class="login-box-msg">{{ __('Register') }}</p>

    <form action="{{ route('register') }}" method="post">
        @csrf
        <div class="input-group mb-3 @error('name') is-invalid @enderror">
            <input type="text" class="form-control" value="{{ old('name') }}" name="name" placeholder="Nom">
        </div>
        @error('name')
        <small class="text-danger" role="alert">
            <strong>{{ $message }}</strong>
        </small>
        @enderror
        <div class="input-group mb-3 @error('email') is-invalid @enderror">
            <input type="email" class="form-control" value="{{ old('email') }}" name="email" placeholder="Email">
        </div>
        @error('email')
        <small class="text-danger" role="alert">
            <strong>{{ $message }}</strong>
        </small>
        @enderror
        <div class="input-group mb-3 @error('password') is-invalid @enderror">
            <input type="password" class="form-control" name="password" placeholder="**********">
        </div>
        @error('password')
        <small class="text-danger" role="alert">
            <strong>{{ $message }}</strong>
        </small>
        @enderror
        <div class="input-group mb-3">
            <input type="password" class="form-control" name="password_confirmation"
                   placeholder="{{ __('Confirm Password') }}">
        </div>
        <div class="row">
            <div class="col-4 offset-8">
                <button type="submit" class="btn btn-primary btn-block">{{ __('Register') }}</button>
            </div>
        </div>
    </form>
@endsection
