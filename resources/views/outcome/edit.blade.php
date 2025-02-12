
<x-layouts.index :title="'Edit Outcome'">
    <form action="{{ route('outcome.update', $outcome->id) }}" method="POST">
        @csrf
        @method('PUT')
    
        <label>Category</label>
        <input type="text" name="category" value="{{ $outcome->category }}">
    
        <label>Amount</label>
        <input type="number" name="amount" value="{{ $outcome->amount }}">
    
        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Update</button>
    </form>    
</x-layouts.index>