<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                @foreach ($tableData['heading'] as $heading)
                <th scope="col" class="px-6 py-3">
                    {{$heading}}
                </th>    
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach ($tableData['data'] as $index => $row)
            <tr class="border-b dark:border-gray-700 @if($index % 2 != 0) bg-white dark:bg-gray-800 @else bg-gray-100 dark:bg-gray-700 @endif">
                @foreach ($row as $cell)
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$cell}}
                    </th>    
                @endforeach
            </tr>    
            @endforeach
        </tbody>
    </table>
</div>

