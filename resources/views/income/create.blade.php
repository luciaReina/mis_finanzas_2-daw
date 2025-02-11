<x-layouts.index :title="$title">
    <form action="{{ route('income.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="amount" class="block text-gray-700 text-sm font-bold mb-2">Amount:</label>
            <input type="number" name="amount" id="amount" class="w-full p-2 border border-gray-300 rounded" required>
        </div>

        <div class="mb-4">
            <label for="category" class="block text-gray-700 text-sm font-bold mb-2">Category:</label>
            <input type="text" name="category" id="category" class="w-full p-2 border border-gray-300 rounded" required>
        </div>

        <button type="submit" style="background-color: #3B82F6; color: white; font-weight: bold; padding: 8px 16px; border-radius: 4px; text-decoration: none; display: inline-block;">
            Save Income
        </button>
    </form>
</x-layouts.index>
