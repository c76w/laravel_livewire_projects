@extends('layouts.app')

@section('content')
    <div class="container-xl">
        <!-- Page title -->
        <div class="p-3 text-center h1">Users</div>
    </div>
    <div class="page-body">
        <div class="container-xl">

            <div class="alert alert-info">
                <div class="alert-title">Sample table page</div>
            </div>

            <div class="card">
                <div class="table-responsive">
                    <table class="table" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>{{ __('Name') }}</th>
                                <th>{{ __('Email Address') }}</th>
                                <th>{{ __('Created at') }}</th>
                                <th>{{ __('Updated in') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->created_at }}</td>
                                <td>{{ $user->updated_at->diffForhumans() }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                @if( $users->hasPages() )
                <div class="pb-0 card-footer">
                    {{ $users->links() }}
                </div>
                @endif
            </div>
        </div>
    </div>
@endsection
