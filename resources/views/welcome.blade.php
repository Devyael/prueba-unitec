@extends('layouts.app')

@section('styles')
    <style>
        #register-card {
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
    <section class="container py-4 vh-100 d-flex align-items-center" id="main">
        <div class="row justify-content-center">
            <div class="col-md-10 d-flex align-item-center">
                <div class="card w-100 p-4" id="register-card">
                    <div class="card-body">
                        <h5 class="card-title text-center py-3">
                            REGISTRO <br/>
                            <b>NUEVOS USUARIOS</b>
                        </h5>
                        
                        <!-- Livewire component -->
                        <livewire:register>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')

@endsection