<x-layout>
    <x-section-heading>Top Companies</x-section-heading>
    <div class="grid lg:grid-cols-3 gap-8 mt-6">
        @foreach($employers as $employer)
            <div class="bg-white/5 p-4 rounded-xl border border-white/10 text-center">
                <x-employer-logo :employer="$employer" :width="90" />
                <h3 class="font-bold text-xl mt-4">{{ $employer->name }}</h3>
                <p class="text-sm text-gray-400 mt-2">{{ $employer->jobs_count }} Open Positions</p>
            </div>
        @endforeach
    </div>
</x-layout>