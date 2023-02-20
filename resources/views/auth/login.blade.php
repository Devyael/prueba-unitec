@extends('layouts.app')

@section('styles')
    <style>
        #login-card {
            background: #2aa893;
            border: none;
        }
        .btn-options {
            background: #ffffff;
            color: #2aa893;
            font-weight: bold;
        }
    </style>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" id="login-card">
                <div class="card-body">
                    <h5 class="card-title text-center py-3">
                        INICIO DE <br/>
                        <b>SESIÓN</b>
                    </h5>

                    <form method="POST" action="{{ route('login') }}" class="row d-flex justify-content-center">
                        @csrf

                        <div class="col-md-10 mb-2">
                            <label for="basic-url" class="form-label">Correo electrónico</label>

                            <div class="input-group">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            </div>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-md-10 mb-2">
                            <label for="basic-url" class="form-label">Contraseña</label>

                            <div class="input-group">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            </div>

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="row mt-5">
                            <div class="col-md-8 offset-md-4">
                                <a href="{{ url('/') }}" class="btn btn-options">
                                    Registrarse
                                </a>

                                <button type="submit" class="btn btn-options">
                                    Iniciar sesión
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
