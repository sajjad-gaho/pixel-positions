<x-layout>
    <div class="max-w-2xl mx-auto mt-10 p-8 bg-white/5 border border-white/10 rounded-2xl">
        <h1 class="text-3xl font-bold text-white">{{ $job->title }}</h1>
        <p class="text-blue-400 text-xl mt-2 font-semibold">Salary: {{ $job->salary }}</p>
        
        <div class="mt-8 space-y-4">
            <div class="flex justify-between border-b border-white/5 pb-2">
                <span class="text-gray-400 font-bold uppercase text-xs">Company</span>
                <span class="text-white">{{ $job->employer->name ?? 'N/A' }}</span>
            </div>

            <div class="flex justify-between border-b border-white/5 pb-2">
                <span class="text-gray-400 font-bold uppercase text-xs">Location</span>
                <span class="text-white">{{ $job->location ?? 'Remote' }}</span>
            </div>

            <div class="flex justify-between border-b border-white/5 pb-2">
                <span class="text-gray-400 font-bold uppercase text-xs">Employment Type</span>
                <span class="text-white">{{ $job->schedule }}</span>
            </div>
        </div>

        {{-- Tags Section --}}
        <div class="mt-8">
            <h4 class="text-gray-400 font-bold uppercase text-xs mb-3">Skills/Tags</h4>
            <div class="flex flex-wrap gap-2">
                @foreach($job->tags as $tag)
                    <x-tag :tag="$tag" />
                @endforeach
            </div>
        </div>

        <div class="mt-10 pt-6 border-t border-white/10 flex justify-between items-center">
            <button onclick="history.back()" class="text-gray-400 hover:text-white transition">
                ← Go Back
            </button>
            
            <x-forms.button>Apply Now</x-forms.button>
        </div>
    </div>
</x-layout>