<x-layouts.index :title="'Edit Income'">
    <form action="{{ route('income.update', $income->id) }}" method="POST" class="max-w-lg mx-auto bg-white p-6 rounded shadow">
        @csrf
        @method('PUT')

        <label class="block mb-2">Amount:</label>
        <input type="number" name="amount" value="{{ $income->amount }}" required class="w-full border rounded p-2 mb-4">

        <label class="block mb-2">Category:</label>
        <input type="text" name="category" value="{{ $income->category }}" required class="w-full border rounded p-2 mb-4">

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update Income</button>
    </form>
</x-layouts.index>
