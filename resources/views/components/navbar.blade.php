<div class="min-h-screen flex flex-col">
    <header class="bg-gradient-to-r from-gray-800 via-gray-700 to-gray-600 text-white shadow-md">
        <div class="container mx-auto px-4 py-2 flex justify-between items-center">
            <a href="/" class="flex items-center space-x-2">
                <img class="w-6 h-6" src="{{ asset('logo.png') }}" alt="Logo" />
                <span class="text-sm font-semibold tracking-tight">SoftNest</span>
            </a>

            <div class="relative">
                @auth
                    <button class="flex items-center focus:outline-none hover:bg-gray-700 px-2 py-1 rounded-lg transition"
                        id="userDropdown">
                        <div class="relative w-8 h-8 rounded-full overflow-hidden border-2 border-gray-400">
                            @php
                                $profilePicUrl = Auth::user()->profile_picture ? Storage::url(Auth::user()->profile_picture) : asset('default-profile.png');
                            @endphp
                            <img src="{{ $profilePicUrl }}" alt="{{ Auth::user()->name }}" class="object-cover w-full h-full">
                        </div>
                        
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="w-3 h-3 ml-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <ul class="absolute right-0 mt-2 w-48 bg-white text-gray-800 border border-gray-200 rounded-lg shadow-md hidden z-50"
                        id="dropdownMenu">
                        <li class="px-4 py-3 border-b border-gray-200">
                            <p class="text-sm font-medium text-gray-900">{{ Auth::user()->name }}</p>
                            <p class="text-xs text-gray-500">{{ Auth::user()->email }}</p>
                        </li>
                        @if (Auth::user()->role == 'admin')
                            <li>
                                <a href="{{ route('admin') }}" class="block px-4 py-2 hover:bg-gray-100 text-sm transition">
                                    Admin
                                </a>
                            </li>
                        @endif
                        <li>
                            <a href="{{ route('profile') }}" class="block px-4 py-2 hover:bg-gray-100 text-sm transition">
                                Profile
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('articles') }}" class="block px-4 py-2 hover:bg-gray-100 text-sm transition">
                                Articles
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('over-ons') }}" class="block px-4 py-2 hover:bg-gray-100 text-sm transition">
                                Over ons
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('logout') }}"
                                class="block px-4 py-2 hover:bg-red-100 text-red-500 text-sm transition">
                                Logout
                            </a>
                        </li>
                    </ul>
                @endauth
                @guest
                    <a href="{{ route('login') }}"
                        class="px-3 py-1 bg-blue-600 text-white rounded-md hover:bg-blue-500 text-sm transition">
                        Login
                    </a>
                @endguest
            </div>
        </div>
    </header>

    <script>
        document.addEventListener("click", function(event) {
            const dropdown = document.getElementById("dropdownMenu");
            const dropdownButton = document.getElementById("userDropdown");

            if (dropdownButton && dropdownButton.contains(event.target)) {
                dropdown.classList.toggle("hidden");
            } else if (dropdown && !dropdown.contains(event.target)) {
                dropdown.classList.add("hidden");
            }
        });
    </script>
