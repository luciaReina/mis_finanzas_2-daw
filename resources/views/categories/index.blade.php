<x-layouts.index title="Categories">
    <h2 class="text-xl font-bold mb-4">Categories</h2>

    <ul class="list-disc pl-5">
        @foreach ($categories as $category)
            <li>
                <a href="{{ route('categories.show', $category->category) }}" class="text-blue-500">
                    {{ $category->category }}
                </a>
            </li>
        @endforeach
    </ul>
</x-layouts.index>
