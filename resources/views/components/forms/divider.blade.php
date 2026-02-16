@props(['title' => null])

<div class="mt-8">
    
    @if($title)
        <h3 class="text-lg font-semibold text-white mb-4">
            {{ $title }}
        </h3>
    @endif

    <div {{ $attributes->merge(['class' => 'space-y-6 border-t pt-6']) }}>
        {{ $slot }}
    </div>

</div>
