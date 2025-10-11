<!-- Navbar -->
<div class="navbar fixed top-0 left-0 w-full flex items-center justify-between h-20 px-4 z-50">
    <!-- Burger -->
    <button id="nav-menu-toggle" class="fixed top-4 left-4 p-2 rounded-md text-black hover:text-gray-500 z-50">
        <span class="sr-only">Open menu</span>
        <svg class="h-8 w-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
    </button>

    <!-- Auth -->
    <div>
        @auth
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit">Logout</button>
            </form>
        @endauth
    </div>
</div>

<!-- Sidebar -->
<div id="nav-desktop-menu"
    class="fixed top-0 left-0 h-screen w-1/4 bg-white transform -translate-x-full transition-transform duration-500 ease-in-out z-40 shadow-lg">
    <div class="pt-20 px-4">
        <a href="/" class="block py-3 hover:text-gray-500">Domov</a>
        <a href="/about" class="block py-3 hover:text-gray-500">O knihe</a>
        <a href="/collab" class="block py-3 hover:text-gray-500">Spolupráca</a>
        <a href="/more" class="block py-3 hover:text-gray-500">Chcem Viac</a>
        <a href="/stats" class="block py-3 hover:text-gray-500">Štatistika</a>
        <a href="/partners" class="block py-3 hover:text-gray-500">Partneri</a>
        <a href="/gallery" class="block py-3 hover:text-gray-500">Galéria</a>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const toggle = document.getElementById('nav-menu-toggle');
        const menu = document.getElementById('nav-desktop-menu');
        const navbar = document.querySelector('.navbar');
        let open = false;

        toggle.addEventListener('click', () => {
            open = !open;

            // Slide sidebar
            menu.classList.toggle('-translate-x-full', !open);
            menu.classList.toggle('translate-x-0', open);
        });
    });
</script>
