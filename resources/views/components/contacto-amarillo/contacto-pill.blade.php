@props(['value'])

<span
    {{ $attributes->merge(['class' => "inline-block bg-gray-600 rounded-3xl px-3 py-2 text-xs font-semibold text-gray-100 mr-1 mb-1"]) }}>
    {{$value ?? $slot}}
</span>