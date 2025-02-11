<x-layouts.index :title="'Edit Expense'">
    <form action="{{ route('expenses.update', $expense->id) }}" method="POST" class="max-w-lg mx-auto bg-white p-6 rounded shadow">
        @csrf
        @method('PUT')

        <label class="block mb-2">Amount:</label>
        <input type="number" name="amount" value="{{ $expense->amount }}" required class="w-full border rounded p-2 mb-4">

        <label class="block mb-2">Category:</label>
        <input type="text" name="category" value="{{ $expense->category }}" required class="w-full border rounded p-2 mb-4">

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update Expense</button>
    </form>
</x-layouts.index>
