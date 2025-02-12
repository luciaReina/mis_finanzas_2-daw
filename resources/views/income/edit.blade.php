<x-layouts.index :title="'Edit Income'">
    <form action="{{ route('income.update', $income->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Amount:</label>
        <input type="number" name="amount" value="{{ $income->amount }}" required>

        <label>Category:</label>
        <input type="text" name="category" value="{{ $income->category }}" required>

        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Update</button>
    </form>
</x-layouts.index>
