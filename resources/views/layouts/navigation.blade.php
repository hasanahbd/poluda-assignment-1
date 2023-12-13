<nav class="w-full py-4 bg-blue-800 shadow">
    <div class="w-full container mx-auto flex flex-wrap items-center justify-between">

        <nav>
            <ul class="flex items-center justify-between font-bold text-sm text-white uppercase no-underline">
                <li><a class="hover:text-gray-200 hover:underline px-4" href="{{route('posts.index')}}">Home</a></li>
                @auth
                    <li><a class="hover:text-gray-200 hover:underline px-4" href="{{route('posts.create')}}">Create Post</a></li>
                @endauth
                <li><a class="hover:text-gray-200 hover:underline px-4" href="#">About</a></li>
                <li><a class="hover:text-gray-200 hover:underline px-4" href="{{route('categories.index')}}">All Categories</a></li>
            </ul>
        </nav>

        @auth
            <div x-data="{ open: false }" class="relative">
                <!-- Main Menu Button -->
                <button @click="open = !open"
                    class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 focus:outline-none focus:bg-blue-700">
                    {{ Auth::user()->name }}
                </button>

                <!-- Dropdown Menu -->
                <div x-show="open" @click.away="open = false"
                    class="absolute mt-2 w-48 bg-white rounded-md shadow-lg z-50">
                    <a href="/profile" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profile</a>

                    <!-- Logout Form -->
                    <form method="POST" action="{{ route('logout') }}" class="block">
                        @csrf
                        <button type="submit" class="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                            Logout
                        </button>
                    </form>
                </div>
            </div>
        @endauth
        @guest
            <a href="{{ route('login') }}" class="px-4 py-2 text-sm text-gray-200 hover:underline">Login</a>
        @endguest

    </div>

</nav>
