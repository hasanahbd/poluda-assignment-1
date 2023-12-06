<x-app-layout>
    <x-slot:title>New Post</x-slot>
    <x-slot:styles>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.css">
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    </x-slot:styles>
    <x-slot:maincontent>
        <div class="max-w-7xl mx-auto p-8 bg-white rounded-lg shadow-xl">
            <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Title</label>
                    <input type="text" name="title" id="title"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" />
                </div>

                <div class="mb-4">
                    <label for="content" class="block text-gray-700 text-sm font-bold mb-2">Content</label>
                    <textarea name="content" id="content"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
                </div>

                <div class="mb-4">
                    <label for="excerpt" class="block text-gray-700 text-sm font-bold mb-2">Excerpt</label>
                    <textarea name="excerpt" id="excerpt"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
                </div>

                <div class="mb-4">
                    <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Image</label>
                    <input type="file" name="image" id="image"
                        class="shadow border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>

                <div class="mb-4">
                    <label for="category" class="block text-gray-700 text-sm font-bold mb-2">Category</label>
                    <x-category-select class="select2 border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" :selector="'select2'" :categories="$categories" />
                </div>

                <div class="mb-4">
                    <label for="tags" class="block text-gray-700 text-sm font-bold mb-2">Tags</label>
                    <select name="tags[]" id="tags" multiple
                        class="shadow border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        <!-- Tags options -->
                    </select>
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
    <x-slot:scripts>
        <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"> </script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script>
            $(document).ready(function() {
                $('.select2').select2();
            });
        </script>

        <x-head.tinymce-config :selector="'#content'"></x-head.tinymce-config>
    </x-slot:scripts>
</x-app-layout>
