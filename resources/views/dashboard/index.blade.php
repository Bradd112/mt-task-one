@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h2 class="m-0">
                {{ __('dashboard.title') }}
            </h2>
        </div>

        <div class="card-body">
            <p>
                {{ __('dashboard.welcome', ['name' => Auth::user()->username]) }}
            </p>
        </div>
    </div>
@endsection
