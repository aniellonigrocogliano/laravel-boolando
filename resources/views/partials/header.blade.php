<header class="header text-white">
    <nav class="d-flex container justify-content-between align-items-center">
        <div class="col-4 justify-content-start align-items-center">
            <ul class="d-flex justify-content-center gap-3">
                <li class="{{ Request::route()->getName() === 'index' ? 'active' : '' }}"><a href="{{ route('index') }}">Home</a></li>
                <li class="{{ Request::route()->getName() === 'uomo' ? 'active' : '' }}"><a href="{{ route('uomo') }}">Uomo</a></li>
                <li class="{{ Request::route()->getName() === 'donna' ? 'active' : '' }}"><a href="{{ route('donna') }}">Donna</a></li>
                <li class="{{ Request::route()->getName() === 'bambini' ? 'active' : '' }}"><a href="{{ route('bambini') }}">Bambini</a></li>
              </ul>
        </div>
        <div class=" col-4 justify-content-center align-items-center">
            <img src="{{ Vite::asset('resources/img/boolean-logo.png') }}" alt="Logo Boolando">
        </div>
        <div class="col-4">
            <ul class="d-flex nowrap gap-3 justify-content-end align-items-center">
                <li> <a href=""><i class="fa-solid fa-user"></i></a></li>
                <li> <a href=""><i class="fa-solid fa-heart"></i></a></li>
                <li> <a href=""><i class="fa-solid fa-bag-shopping"></i></a></li>
            </ul>
        </div>
    </nav>
</header>
