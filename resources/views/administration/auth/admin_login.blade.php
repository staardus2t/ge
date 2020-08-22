@extends('layouts.app_login')

@section('content')
<div class="m-login__wrapper">
    <div class="m-login__logo">
        <a href="{{ route('login') }}">
            <img src="{{ asset('assets\app\media\img\logos\logo-4.png')}}" style="width:200px;">
        </a>
    </div>
    <div class="m-login__signin">
        <form class="m-login__form m-form" action="{{ route('admin.login.submit') }}" method="POST">
            @csrf
            <div class="form-group m-form__group">
                <input class="form-control m-input @error('username') is-invalid @enderror" type="text" placeholder="Nom d'utilisateur" name="username" required autofocus autocomplete="off" value="{{ old('username') }}">
                @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group m-form__group">
                <input class="form-control m-input m-login__form-input--last @error('password') is-invalid @enderror" type="password" required placeholder="Mot de passe" autocomplete="off" name="password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            @include('shared.errors_succes')
            
            <div class="m-login__form-action">
                <button type="submit" class="btn btn-primary m-btn m-btn--pill m-btn--custom m-btn--air">Se connecter</button>
            </div>
        </form>
    </div>
</div>
@endsection

