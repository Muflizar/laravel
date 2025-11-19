<header>
    <nav>
        <div class="logo">MyPortfolio</div>
        <ul class="nav-links">
            <li><a href="{{ route('home') }}" class="{{ Request::routeIs('home') ? 'active' : '' }}">Home</a></li>
            <li><a href="{{ route('about') }}" class="{{ Request::routeIs('about') ? 'active' : '' }}">Tentang</a></li>
            <li><a href="{{ route('portfolio') }}" class="{{ Request::routeIs('portfolio') ? 'active' : '' }}">Portofolio</a></li>
        </ul>
    </nav>
</header>