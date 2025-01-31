<x-layouts.index :title="$title">
    <x-table :tableData="[
        'heading' => ['Date', 'Category', 'Amount'],
        'data' => $outcomes->map(function ($outcome) {
            return [
                $outcome->created_at->format('d/m/Y'),
                $outcome->category,
                $outcome->amount,
            ];
        })->toArray()
    ]" />
</x-layouts.index>
