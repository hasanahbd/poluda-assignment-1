<span class="text-blue-700 text-sm font-bold uppercase pb-4">
    @foreach ($categories as $category)
        @if ($loop->iteration > 1)
            ,
            
        @endif
        <a href="{{route('categories.index')}}" class="hover:text-gray-700">{{ $category->name }} </a>
    @endforeach
</span>
