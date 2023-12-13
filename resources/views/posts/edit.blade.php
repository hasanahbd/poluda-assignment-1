<x-layouts.app>
    <x-slot:title>New Post</x-slot>
    <x-slot:maincontent>
        <div class="max-w-7xl mx-auto p-8 bg-white rounded-lg shadow-xl">
            <form action="{{ route('posts.update',$post) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Title</label>
                    <input type="text" name="title" id="title" value="{{$post->title}}"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" />
                </div>

                <div class="mb-4">
                    <label for="content" class="block text-gray-700 text-sm font-bold mb-2">Content</label>
                    <textarea name="content" id="content" 
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{!!$post->content!!}</textarea>
                </div>

                <div class="mb-4">
                    <label for="excerpt" class="block text-gray-700 text-sm font-bold mb-2">Excerpt</label>
                    <textarea name="excerpt" id="excerpt" 
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{$post->excerpt}}</textarea>
                </div>

                <div class="mb-4">
                    <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Image</label>
                    <input type="file" name="image" id="image"
                        class="shadow border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>

                <div class="mb-4">
                    <label for="category" class="block text-gray-700 text-sm font-bold mb-2">Category</label>
                    <select name="category[]" id="category" multiple
                        class="shadow border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        <!-- Category options -->
                    </select>
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
        <x-head.tinymce-config :selector="'#content'"></x-head.tinymce-config>
    </x-slot:scripts>
</x-layouts.app>
