<x-layouts.index title="Category: {{ $category }}">
    <h2 class="text-xl font-bold mb-4">Category: {{ $category }}</h2>

    @if ($incomes->isEmpty())
        <p>No incomes found for this category.</p>
    @else
        <table class="w-full border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-200">
                    <th class="border border-gray-300 px-4 py-2">Date</th>
                    <th class="border border-gray-300 px-4 py-2">Amount</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($incomes as $income)
                    <tr class="border border-gray-300">
                        <td class="border border-gray-300 px-4 py-2">{{ $income->created_at->format('d/m/Y') }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $income->amount }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    <a href="{{ route('categories.index') }}" class="mt-4 inline-block bg-gray-500 text-white px-4 py-2 rounded">Back to Categories</a>
</x-layouts.index>
