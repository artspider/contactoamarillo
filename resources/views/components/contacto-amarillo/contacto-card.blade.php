@props(['grid'])
<div {{ $attributes->
  merge([ 'class' => "contacto-card bg-white rounded-md shadow-md $grid p-8" ])
  }} >
  {{ $slot }}
</div>
