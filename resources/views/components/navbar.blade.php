<div class="mx-auto max-w-7xl px-4">
    <div class="flex items-center justify-between h-20">

        <!-- Burger button -->
        <button id="nav-menu-toggle"
            class="inline-flex items-center justify-center p-2 rounded-md text-gray-200 hover:text-white focus:outline-none focus:ring-2 focus:ring-white"
            aria-controls="nav-desktop-menu" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
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
</div>

<!-- Dropdown menu -->
<div id="nav-desktop-menu"
    class="max-h-0 opacity-0 overflow-hidden text-gray-100 transition-all duration-500 ease-in-out">
    <div class="mx-auto max-w-7xl px-4">
        <a href="/" class="block py-3 hover:text-gray-500">O knihe</a>
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
        const inner = menu.querySelector('div');
        let open = false;

        toggle.addEventListener('click', () => {
            open = !open;
            if (open) {
                menu.style.maxHeight = inner.scrollHeight + 'px';
                menu.classList.remove('opacity-0');
                menu.classList.add('opacity-100');
            } else {
                menu.style.maxHeight = 0;
                menu.classList.remove('opacity-100');
                menu.classList.add('opacity-0');
            }
        });
    });
</script>
