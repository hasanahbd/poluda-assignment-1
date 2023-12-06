<section class="w-full  flex flex-col items-center px-3">
    @if (isset($featuredPost->image))
    <article class="flex flex-col shadow my-4 w-full">
        <!-- Article Image -->
        <x-posts.single :post="$featuredPost"></x-posts.single>
    </article>
    @endif

    <div class="flex flex-wrap justify-center">
        @foreach ($posts as $post)
            <!-- Set the padding inside the container to px-2 and each article to w-full/2 minus padding -->
            <article class="shadow my-4 px-2 w-1/2 md:w-1/2"> <!-- Article Image -->

                <x-posts.single :post="$post"></x-posts.single>
            </article>
        @endforeach
    </div>





    <!-- Pagination -->
    <div class="flex items-center py-8">
        <a href="#"
            class="h-10 w-10 bg-blue-800 hover:bg-blue-600 font-semibold text-white text-sm flex items-center justify-center">1</a>
        <a href="#"
            class="h-10 w-10 font-semibold text-gray-800 hover:bg-blue-600 hover:text-white text-sm flex items-center justify-center">2</a>
        <a href="#"
            class="h-10 w-10 font-semibold text-gray-800 hover:text-gray-900 text-sm flex items-center justify-center ml-3">Next
            <i class="fas fa-arrow-right ml-2"></i></a>
    </div>

</section>
