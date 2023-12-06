@props(['post'])

<a href="#" class="hover:opacity-75">
    <img class="w-full" src="{{ $post->image }}" alt="Article Image">
</a>
<div class="bg-white flex flex-col justify-start p-6">
    <x-posts.post-category-show :categories="$post->categories"></x-posts.post-category-show>
    <a href="#" class="text-3xl font-bold hover:text-gray-700 pb-4">{{ $post->title }}</a>
    <p class="text-sm pb-3">
        By <a href="#" class="font-semibold hover:text-gray-800">{{ $post->author->name }}</a>,
        Published on
        {{ $post->created_at }}
    </p>
    <div class="pb-6">{{ $post->excerpt }}..</div>

    <div class="flex items-center justify-between">
        <a href="#" class="uppercase text-gray-800 hover:text-black">Continue Reading <i
                class="fas fa-arrow-right"></i></a>
        @auth
            <div class="flex items-center">
                <a href="{{route('posts.edit',$post)}}" class="text-blue-600 hover:text-blue-800 mr-4">
                    Edit &rarr;
                </a>
                <form action="{{route('posts.destroy',$post)}}" method="POST">
                    @method('Delete')
                    @csrf
                    <button type="submit" class="text-red-600 hover:text-red-800">
                        Delete
                    </button>
                </form>
            </div>
        @endauth
    </div>

</div>
