@props([
'color' => 'gray',
'is_disabled' => 'enabled',
'textcolor' => 'white',
'tracking' => 'wider'
])
<button {{$is_disabled}}
    {{ $attributes->merge(['class' => 'inline-flex items-center px-4 py-2 bg-' . $color . '-800 border border-transparent rounded-md font-semibold text-xs text-'. $textcolor . ' uppercase tracking-' . $tracking . ' hover:bg-' . $color . '-700 active:bg-' . $color . '-900 focus:outline-none focus:border-' . $color . '-900 focus:ring ring-' . $color . '-300 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>