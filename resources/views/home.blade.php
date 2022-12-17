@extends('layouts.app')

@section('custom_styles')

@endsection

@section('content')
    <div class="container">
        <!-- Page title -->
        <div class="p-3 text-center h1">Dashboard</div>
    </div>
    <div class="page-body">
        <div class="container">
            <!--Welcome Alert -->
            <div class="p-3 mt-3 alert alert-success">
                <div class="alert-title">
                    {{ __('Welcome') }} {{ auth()->user()->name ?? null }}
                </div>
                <div class="text-muted">
                    {{ __('You are logged in!') }}
                </div>
            </div>

            <!--Home Message -->
            <div class="p-3 card">
                <div class="card-body">
                    <p class="card-text">
                        {{ __('Here are a few projects created by me using Laravel and Livewire. ') }}
                    </p>
                </div>
            </div>

        </div>
    </div>
@endsection