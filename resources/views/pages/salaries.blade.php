<x-layout>
    <div class="space-y-10">
        <section class="text-center pt-6">
            <h1 class="font-bold text-4xl">Market Salary Insights</h1>
            <p class="text-gray-400 mt-2">See how much you can earn based on your role.</p>
        </section>

        <section class="grid lg:grid-cols-3 gap-8">
            @foreach($jobs as $job)
                <div class="p-6 bg-white/5 rounded-xl border border-white/25 flex flex-col items-center">
                    <div class="self-start text-sm text-gray-500">{{ $job->employer->name }}</div>
                    <h3 class="font-bold text-xl mt-3">{{ $job->title }}</h3>
                    <p class="text-blue-400 font-bold text-2xl mt-4">{{ $job->salary }}</p>
                    <p class="text-blue-400 text-sm mt-4">{{ $job->location }}</p>
                    <p class="text-blue-400 text-sm mt-4">{{ $job->schedule }}</p>
                    <!-- <p class="text-blue-400 text-sm mt-4">{{ $job->featured }}</p> -->                    
                    {{-- Button to View Detail --}}
                    <a href="{{ route('pages.detail', $job->id) }}" class="mt-6 px-4 py-2 bg-white/10 hover:bg-white/20 rounded-lg text-xs transition-colors">
                        View Detailed Stats
                    </a>

                </div>
            @endforeach
        </section>
    </div>
</x-layout>