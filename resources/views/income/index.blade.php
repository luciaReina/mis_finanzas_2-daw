<x-layouts.index :title="$title">
    
    <x-alert />
    
    <table class="w-full border-collapse border border-gray-300">
        <thead>
            <tr class="bg-gray-200">
                @foreach ($tableData['heading'] as $heading)
                    <th class="border border-gray-300 px-4 py-2">{{ ucfirst($heading) }}</th>
                @endforeach
                <th class="border border-gray-300 px-4 py-2 text-right">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($incomes as $income) <!-- Cambiar a $incomes en lugar de $tableData['data'] -->
                <tr class="border border-gray-300">
                    <td class="border border-gray-300 px-4 py-2">{{ $income->created_at->format('d/m/Y') }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $income->category }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $income->amount }}</td>
                    <td class="border border-gray-300 px-4 py-2 text-right flex justify-end space-x-2">
                        <a href="{{ route('income.edit', $income->id) }}" class="bg-blue-500 text-white px-2 py-1 rounded">Edit</a>
                        <form action="{{ route('income.destroy', $income->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <br>
    <x-button :botonEnlace="$botonEnlace" :botonEnlace2="$botonEnlace2" />
</x-layouts.index>
