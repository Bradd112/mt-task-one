<header class="p-2 bg-gray-100">
    <div class="row align-items-center">
        <div class="col">
            <h1 class="m-0">MT Task One</h1>
        </div>
        <div class="col-auto">
            @if(\Illuminate\Support\Facades\Auth::check())
                <a href="{{ route('logout') }}" class="btn btn-primary">{{ __('login.logout') }}</a>
            @else
                <a href="{{ route('login') }}" class="btn btn-primary">{{ __('login.title') }}</a>
            @endif
        </div>
    </div>
</header>
