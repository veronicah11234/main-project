{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Admin Dashboard</div>

                <div class="card-body">
                    @if (Auth::user() && Auth::user()->hasRole('admin'))
                        <p>Welcome, Admin!</p>
                        <!-- Add your admin-specific content here -->
                    @else
                        <p>You are not authorized to access this page.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@if(Route::currentRouteName() === 'admin.logout')
<script>
    window.addEventListener('beforeunload', function () {
        // Check if the user is logged in before sending the logout request
        @auth
            fetch("{{ route('admin.logout') }}", {
                method: "POST",
                headers: {
                    "X-CSRF-TOKEN": "{{ csrf_token() }}",
                    "Content-Type": "application/json",
                },
                body: JSON.stringify({}),
            })
            .then(function (response) {
                if (response.ok) {
                    console.log('Logged out successfully.');
                } else {
                    console.error('Failed to log out:', response.status, response.statusText);
                }
            })
            .catch(function (error) {
                console.error('An error occurred while logging out:', error);
            });
        @endauth
    });
</script>
@endif --}}
