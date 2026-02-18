<x-layout>
    <div class="space-y-16 px-6">
        <section class="text-center pt-10">
            <x-page-heading>Admin Dashboard</x-page-heading>
        </section>

        <section class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto w-full">
            <div class="p-8 bg-white/5 border border-white/10 rounded-xl text-center group hover:bg-white/10 transition-colors duration-300 shadow-lg hover:border-blue-400 transition-all duration-300">
                <!-- <x-section-heading>Total Jobs</x-section-heading> -->
                <h3 class="text-gray-400 mb-2">Total Jobs</h3>
                <div class="mt-4">

                    <h2 class="text-5xl font-bold text-blue-400 group-hover:scale-110 transition-transform duration-300">
                        {{ $totalJobs }}
                    </h2>
                </div>
            </div>

            <div class="p-8 bg-white/5 border border-white/10 rounded-xl text-center group hover:bg-white/10 transition-colors duration-300 shadow-lg hover:border-blue-400 transition-all duration-300">
                <h3 class="text-gray-400 mb-2">Total Registered Users</h3>
                <!-- <x-section-heading>Total Registered Users</x-section-heading> -->
                <div class="mt-4">
                    <h2 class="text-5xl font-bold text-blue-400 group-hover:scale-110 transition-transform duration-300">
                        {{ $totalUsers }}
                    </h2>
                </div>
            </div>
        </section>

        <section class="max-w-6xl mx-auto w-full pb-20">
            <div class="flex justify-between items-center mb-6">
                <h4 class="text-2xl font-bold">Recent Job Postings</h4>
                <a href="/" class="text-sm text-blue-400 hover:underline">View All Jobs</a>
            </div>

            <div class="overflow-x-auto bg-white/5 rounded-xl border border-white/10">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-white/10 text-white">
                            <th class="p-4 font-semibold">Title</th>
                            <th class="p-4 font-semibold">Company</th>
                            <th class="p-4 font-semibold">Posted Date</th>
                            <th class="p-4 font-semibold text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-white/5">
                        @foreach($recentJobs as $job)
                        <tr class="hover:bg-white/5 transition-colors">
                            <td class="p-4">{{ $job->title }}</td>
                            <td class="p-4 text-gray-400">{{ $job->employer->name ?? 'N/A' }}</td>
                            <td class="p-4 text-gray-400">{{ $job->created_at->format('d M, Y') }}</td>
                            <td class="p-4 text-center">
                                <a href="/jobs/{{ $job->id }}" class="px-4 py-2 bg-blue-600 hover:bg-blue-500 rounded-lg text-xs font-bold transition-colors">
                                    VIEW
                                </a>
                                <!-- <a href="/jobs/{{ $job->id }}"></a> -->
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section>
    </div>
</x-layout>