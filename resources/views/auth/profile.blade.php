<x-layout>
    
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        <x-page-heading>My Profile</x-page-heading>
                    </div>
                    <div class="card-body">
                        <div class="text-center mb-4">
                            <h3>{{ $user->name }}</h3>
                            <p class="text-muted">{{ $user->email }}</p>
                        </div>

                        <hr>

                        <div class="row">
                            <div class="col-sm-4 font-weight-bold">Member Since:</div>
                            <div class="col-sm-8">{{ $user->created_at->format('d M, Y') }}</div>
                        </div>

                        <div class="mt-4">
                            <a href="/" class="btn btn-outline-secondary">Back to Home</a>
                            {{-- Future mein edit profile ka button yahan aa sakta hai --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layout>