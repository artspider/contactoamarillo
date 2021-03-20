<button type="button" value="$type"
    {{ $attributes->merge(['class' => "btn $type text-xs md:text-sm lg:text-base text-center font-bold
    rounded-md", '@click' => " $option; document.getElementById('datatype').value = $type", ':class' => " $alpine" ]) }}>
    {{ $slot }}
</button>