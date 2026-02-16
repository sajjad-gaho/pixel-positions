@props(['name', 'label'])

<!-- <label
    {{ $attributes->merge(['class' => 'block text-sm/6 font-medium text-dark mb-4']) }}
    for="{{ $name }}">
    {{ $label ?? $slot }}
</label> -->
<label {{ $attributes->merge(['class'=>'block text-md font-medium text-white py-2 px-1']) }} 
    for="{{ $name }}"><span class="w-2 h-2 bg-white inline-block mb-0.5 gap-2"></span> {{ $label ?? $slot }} </label>