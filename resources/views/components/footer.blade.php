<footer class="mt-20 border-t border-white/10 bg-black/50 py-10">
    <div class="max-w-[1280px] mx-auto px-6">
        <div class="grid lg:grid-cols-4 gap-8">
            <div class="col-span-1">
                <a href="/" class="flex items-center gap-2">
                    <img src="{{ asset('images/logo.svg') }}" alt="" width="30">
                    <span class="font-bold text-xl text-white">Pixel Positions</span>
                </a>
                <p class="mt-4 text-sm text-gray-400 leading-relaxed">
                    Connecting talented developers with world-class opportunities.
                </p>
            </div>

            <div>
                <h4 class="font-bold text-white mb-4">Explore</h4>
                <ul class="space-y-2 text-sm text-gray-400">
                    <li><a href="/" class="hover:text-blue-400 transition">Jobs</a></li>
                    <li><a href="/companies" class="hover:text-blue-400 transition">Companies</a></li>
                    <li><a href="/salaries" class="hover:text-blue-400 transition">Salaries</a></li>
                </ul>
            </div>

            <div>
                <h4 class="font-bold text-white mb-4">Resources</h4>
                <ul class="space-y-2 text-sm text-gray-400">
                    <li><a href="/careers" class="hover:text-blue-400 transition">Careers</a></li>
                    <li><a href="#" class="hover:text-blue-400 transition">Terms of Service</a></li>
                    <li><a href="#" class="hover:text-blue-400 transition">Privacy Policy</a></li>
                </ul>
            </div>

            <div>
                <h4 class="font-bold text-white mb-4">Stay Updated</h4>
                <div class="flex">
                    <input type="email" placeholder="Email address" class="bg-white/5 border border-white/10 rounded-l-lg px-4 py-2 text-sm text-white w-full focus:outline-none focus:border-blue-400">
                    <button class="bg-blue-600 px-4 py-2 rounded-r-lg text-sm font-bold hover:bg-blue-700 transition">Join</button>
                </div>
            </div>
        </div>

        <div class="mt-12 pt-8 border-t border-white/5 text-center text-sm text-gray-500">
            &copy; {{ date('Y') }} Pixel Positions. All rights reserved. Made with ❤️ for Developers.
        </div>
    </div>
</footer>