<x-layouts.app>
    <x-slot:title>New Category</x-slot>
    <x-slot:maincontent>
        <div class="max-w-2xl mx-auto p-8 bg-white rounded-lg shadow-xl">            
            <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" />
                    @error('name')
                        <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                    @enderror
                </div>
            
                <div class="mb-4">
                    <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description</label>
                    <textarea name="description" id="description"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ old('description') }}</textarea>
                    @error('description')
                        <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                    @enderror
                </div>
            
                <div class="flex items-center justify-between">
                    <button
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="submit">
                        Submit
                    </button>
                </div>
            </form>
            
        </div>

    </x-slot:maincontent>
</x-layouts.app>