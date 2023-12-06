<x-layouts.app>
    <x-slot:title>Noor's Home</x-slot>
    <x-slot name="header">
        <header class="w-full container mx-auto">
            <div class="flex flex-col items-center py-12">
                <a class="font-bold text-gray-800 uppercase hover:text-gray-700 text-5xl" href="#">
                    Minimal Blog
                </a>
                <p class="text-lg text-gray-600">
                    Lorem Ipsum Dolor Sit Amet
                </p>
            </div>
        </header>
    </x-slot>
    <x-slot:categorynav>
        @if(session('success'))
            <div class="bg-green-200 text-green-800 p-4 mb-4">
                {{ session('success') }}
            </div>
        @endif
        <nav class="w-full py-4 border-t border-b bg-gray-100" x-data="{ open: false }">
            <div class="block sm:hidden">
                <a href="#"
                    class="block md:hidden text-base font-bold uppercase text-center flex justify-center items-center"
                    @click="open = !open"> Topics <i :class="open ? 'fa-chevron-down' : 'fa-chevron-up'"
                        class="fas ml-2"></i></a>
            </div>
            <div :class="open ? 'block' : 'hidden'" class="w-full flex-grow sm:flex sm:items-center sm:w-auto">
                <div
                    class="w-full container mx-auto flex flex-col sm:flex-row items-center justify-center text-sm font-bold uppercase mt-0 px-6 py-2">
                    <a href="#" class="hover:bg-gray-400 rounded py-2 px-4 mx-2">Technology</a>
                    <a href="#" class="hover:bg-gray-400 rounded py-2 px-4 mx-2">Automotive</a>
                    <a href="#" class="hover:bg-gray-400 rounded py-2 px-4 mx-2">Finance</a>
                    <a href="#" class="hover:bg-gray-400 rounded py-2 px-4 mx-2">Politics</a>
                    <a href="#" class="hover:bg-gray-400 rounded py-2 px-4 mx-2">Culture</a>
                    <a href="#" class="hover:bg-gray-400 rounded py-2 px-4 mx-2">Sports</a>
                    <div class="flex flex-col sm:flex-row items-center justify-center mx-2">
                        <form action="#" method="GET">
                            <input type="text" placeholder="Search..." class="px-4 py-2 rounded-l-lg" />
                            <button type="button" class="bg-blue-500 text-white rounded-r-lg px-4 py-2">
                                Search
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </nav>
    </x-slot>
    <x-slot:maincontent>
        <x-posts.all ></x-posts.all>
    </x-slot>

</x-layouts.app>
