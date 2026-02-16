<x-layout>
    <div class="space-y-16">
        <section class="text-center py-10">
            <h1 class="text-5xl font-bold">Build Your Future With Us</h1>
            <p class="text-gray-400 mt-4 text-lg">We help developers find their dream roles in top-tier companies.</p>
        </section>

        <section class="grid lg:grid-cols-2 gap-8">
                <a href="/" class="group bg-white/5 p-10 rounded-xl border border-white/10 text-center hover:border-blue-400 transition-all duration-300">
            <div class="p-10 text-center">
                <h2 class="text-4xl font-bold text-blue-400 group-hover:scale-110 transition-transform">{{ $stats['totalJobs'] }}</h2>
                <div class="text-gray-400 mt-2">Active Job Openings</div>
            </div>
                </a>

                <a href="/companies" class="group bg-white/5 p-10 rounded-xl border border-white/10 text-center hover:border-blue-400 transition-all duration-300">
            <div class="p-10 text-center">
                <h2 class="text-4xl font-bold text-blue-400 group-hover:scale-110 transition-transform">{{ $stats['companies'] }}</h2>
                <div class="text-gray-400 mt-2">Partner Companies</div>
            </div>
                </a>
        </section>

        <section>
            <x-section-heading>Why Pixel Positions?</x-section-heading>
            <div class="grid lg:grid-cols-3 gap-6 mt-6">
                <div class="space-y-3">
                    <h3 class="font-bold text-xl">Verified Employers</h3>
                    <p class="text-sm text-gray-400">We are Verify every Comapny Manually So You take More Best Experience.</p>
                </div>
                <div class="space-y-3">
                    <h3 class="font-bold text-xl">Privacy First</h3>
                    <p class="text-sm text-gray-400">Your Data & Resume Will be visible Only Those Company their You Apply.</p>
                </div>
                <div class="space-y-3">
                    <h3 class="font-bold text-xl">Fast Application</h3>
                    <p class="text-sm text-gray-400">Only Single Click You can Apply & Track Your Application Status.</p>
                </div>
            </div>
        </section>

        <section class="bg-blue-600 rounded-2xl p-10 text-center">
            <h2 class="text-3xl font-bold">Ready to take the next step?</h2>
            <p class="mt-4 mb-8">Create your profile today and let employers find you.</p>
            <a href="/register" class="bg-white text-blue-600 px-8 py-3 rounded-lg font-bold hover:bg-gray-100 transition">Create Account</a>
        </section>
    </div>
</x-layout>