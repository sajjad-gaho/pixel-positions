<x-layout>
    <x-section-heading>Results</x-section-heading>
    
    <div class="space-y-6">
        @forelse($jobs as $job)
            <x-job-card-wide :job="$job" />
        @empty
            <div class="text-center py-12 bg-white/5 border border-dashed border-white/10 rounded-xl">
                <p class="text-gray-400 text-lg">Search Result Not Found: {{ request('q') }}</p>
                <!-- <p class="text-sm text-gray-500 mt-2">Not Found Data.</p> -->
            </div>
        @endforelse

        <div class="pt-6">
            <button onclick="history.back()" class="text-blue-600 hover:text-blue-500 underline flex items-center gap-2">
                <span>←</span> Back to Search
            </button>
        </div>
    </div>
</x-layout>