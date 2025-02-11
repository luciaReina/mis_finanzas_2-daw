
{{-- <div>
    @if($attributes->has('href'))
        <a {{ $attributes->has('class')? $attributes: $attributes->merge(['class' => 'bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded inline-block']) }}>
            {{ $slot }}
        </a>
    @elseif($attributes->has('name'))
        <button type="submit" name="{{ $attributes->get('name') }}" {{ $attributes->has('class')?$attributes->except('href'):$attributes->except('name')->merge(['class' => 'bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded']) }}>
            {{ $slot }}
        </button>
    @else
        <button type="button" {{ $attributes->has('class')?$attributes->except('href'):$attributes->merge(['class' => 'bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded']) }}>
            {{ $slot }}
        </button>
    @endif
</div> --}}

{{--mi codigo--}}
<a href="{{ $botonEnlace['enlace'] }}" style="background-color: #3B82F6; color: white; font-weight: bold; padding: 8px 16px; border-radius: 4px; text-decoration: none; display: inline-block;">
    Add income
</a>

<a href="{{ $botonEnlace2['enlace'] }}" style="background-color: #d73bf6; color: white; font-weight: bold; padding: 8px 16px; border-radius: 4px; text-decoration: none; display: inline-block;">
    Add Expense
</a>

{{-- he tenido que ponerlo como style de css porque no me cogia bien 
    cuando lo ponia de la otra forma --}}




