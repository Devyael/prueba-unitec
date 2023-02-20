@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title text-center py-3">
                        BIENVENIDO (A): <br/>
                        <b>{{ Auth::user()->name }}</b>
                    </h5>

                    <div class="alert alert-success my-5" role="alert">
                        ¡Haz iniciado sesión <b>correctamente</b>!
                    </div>

                    <div class="card-title text-center py-3">
                        <a class="btn btn-danger" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            Cerrar sesión
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
