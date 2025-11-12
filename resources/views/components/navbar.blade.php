<div class="navbar fixed top-0 left-0 w-full flex items-center justify-between h-20 px-4 z-50">
    <button id="nav-menu-toggle"
        class="fixed top-4 left-8 p-2 rounded-md text-black md:text-black hover:text-gray-300 z-50 transition-colors duration-300">
        <span class="sr-only">Open menu</span>
        <svg class="h-8 w-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
    </button>
</div>

<div id="nav-desktop-menu" class="fixed top-0 left-0 h-screen w-1/2 md:w-1/4 bg-white z-40 shadow-lg"
    style="transform: translateX(-100%);">
    <div class="pt-24 px-12">
        <a href="/" class="block py-3 hover:text-gray-500">Domov</a>
        <a href="/about" class="block py-3 hover:text-gray-500">O knihe</a>
        <a href="/collab" class="block py-3 hover:text-gray-500">O autoroch</a>
        <a href="/more" class="block py-3 hover:text-gray-500">Ambasádori pohybu</a>
        <a href="/stats" class="block py-3 hover:text-gray-500">Pohyb v číslach</a>
        {{-- <a href="/partners" class="block py-3 hover:text-gray-500">Partneri</a> --}}
        <a href="/gallery" class="block py-3 hover:text-gray-500">Galéria</a>
        @auth
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="text-red-600 py-3 hover:text-red-400">Logout</button>
            </form>
        @endauth
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const toggle = document.getElementById('nav-menu-toggle');
        const menu = document.getElementById('nav-desktop-menu');
    
        menu.style.transition = 'transform 0.5s ease';
    
        let open = false;
    
        // Toggle open/close when clicking the button
        toggle.addEventListener('click', (e) => {
            e.stopPropagation(); // prevent the click from bubbling to the document
            open = !open;
    
            if (open) {
                menu.style.transform = 'translateX(0)';
            } else {
                menu.style.transform = 'translateX(-100%)';
            }
        });
    
        // Close menu when clicking outside
        document.addEventListener('click', (e) => {
            const isClickInsideMenu = menu.contains(e.target);
            const isClickOnToggle = toggle.contains(e.target);
    
            if (!isClickInsideMenu && !isClickOnToggle && open) {
                open = false;
                menu.style.transform = 'translateX(-100%)';
            }
        });
    
        // Optional: close on ESC
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && open) {
                open = false;
                menu.style.transform = 'translateX(-100%)';
            }
        });
    });
    </script>
    