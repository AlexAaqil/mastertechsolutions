<nav x-data="{ open: false }" @click.outside="open = false" class="guest_nav">
    <div class="container">
        <div class="branding">
            <a href="{{ Route::has('home-page') ? route('home-page') : '#' }}">
                <x-app-logo width="80" height="80" />
                {{-- {{ config('app.name') }} --}}
            </a>
        </div>

        <div class="burger_menu" @click="open = !open">
            <span :class="open ? 'rotate-45 translate-y-1.5' : ''"></span>
            <span :class="open ? 'opacity-0' : ''"></span>
            <span :class="open ? '-rotate-45 -translate-y-1.5' : ''"></span>
        </div>

        <div class="nav_links" :class="{ 'open' : open }">
            <div class="main_links">
                @auth
                    <a href="{{ Route::has('dashboard') ? route('dashboard') : '#' }}">Dashboard</a>
                @endif

                <a href="{{ Route::has('home-page') ? route('home-page') : '#' }}" class="{{ Route::is('home-page') ? 'active' : '' }}" wire:navigate>Home</a>
                <a href="{{ Route::has('about-page') ? route('about-page') : '#' }}" class="{{ Route::is('about-page') ? 'active' : '' }}" wire:navigate>About</a>
                <a href="{{ Route::has('contact-page') ? route('contact-page') : '#' }}" class="{{ Route::is('contact-page') ? 'active' : '' }}" wire:navigate>Contact</a>
            </div>

            {{-- <div class="other_links">
                @auth
                    <button wire:click="logout" class="btn btn_danger">Logout</button>
                @else
                    <a href="{{ Route::has('tours-page') ? route('tours-page') : '#' }}">Plan Your Safari</a>
                @endauth
            </div> --}}
        </div>
    </div>
</nav>
