@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- Page title -->
        <div class="p-3 text-center h1">About</div>
    </div>
    <!-- Display text -->
    <div class="page-body">
        <div class="container">
            <div class="p-3 card">
                <div class="card-body">
                    <p class="card-text">
                        {{ __('A selection of Laravel Livewire Projects create by me. ') }}
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
