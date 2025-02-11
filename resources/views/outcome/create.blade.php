<x-layouts.index :title="'Add Expense'">
    <form action="{{ route('outcome.store') }}" method="POST" class="max-w-lg mx-auto bg-white p-6 rounded shadow">
        @csrf
        <label class="block mb-2">Amount:</label>
        <input type="number" name="amount" required class="w-full border rounded p-2 mb-4">

        <label class="block mb-2">Category:</label>
        <input type="text" name="category" required class="w-full border rounded p-2 mb-4">

        <button type="submit" style="background-color: #3B82F6; color: white; font-weight: bold; padding: 8px 16px; border-radius: 4px; text-decoration: none; display: inline-block;">
            Save Expense
        </button>
    </form>
</x-layouts.index>
