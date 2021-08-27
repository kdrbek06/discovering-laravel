<nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand text-white" href="{{ Route ('index')}}">Pokemon Collection</a>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link text-white {{ Route::is('index') ? 'active' : '' }}" aria-current="page" href="{{ Route ('index')}}">Home</a>
                <a class="nav-link text-white {{ Route::is('card') ? 'active' : '' }}" href="{{ Route ('card')}}">Card</a>
                <a class="nav-link text-white {{ Route::is('contact') ? 'active' : '' }}" href="{{ Route ('contact')}}">Contact</a>
            </div>
        </div>
    </div>
</nav>

@section('css')

@endsection
