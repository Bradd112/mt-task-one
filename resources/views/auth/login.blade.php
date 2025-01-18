@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h2 class="m-0">
                {{ __('login.title') }}
            </h2>
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="username">
                                {{ __('login.fields.username') }}
                            </label>

                            <input id="username"
                                   type="text"
                                   class="form-control @error('username') is-invalid @enderror"
                                   name="username"
                                   value="{{ old('username') }}"
                                   required
                                   autocomplete="username"
                                   autofocus
                            >
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="password">
                                {{ __('login.fields.password') }}
                            </label>

                            <input id="password"
                                   type="password"
                                   class="form-control @error('password') is-invalid @enderror"
                                   name="password"
                                   value="{{ old('password') }}"
                                   required
                            >
                        </div>
                    </div>

                    <div class="col-12 mt-3 text-center">
                        <button type="submit"
                                class="btn btn-primary"
                        >
                            {{ __('login.submit') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
