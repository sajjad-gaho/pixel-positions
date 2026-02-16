@props(['error'])
@if ($error)
    <p {{ $attributes->merge(['class' => 'text-red-500 text-sm mt-1']) }}>
        {{ $error }}
    </p>
@endif
