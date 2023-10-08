{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="text-lg font-semibold mb-4">Welcome to the Dashboard</h3>
                    <p class="text-gray-600">You're logged in! Customize this section with your dashboard content.</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
 <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
     
        <li class="nav-item {{ Request::is('tours') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.addtour') }}">Add Tours</a>
        </li> --}}

         {{-- //Check if the user has the 'admin' role before displaying the 'Bookings' link --}}
         {{-- @if(Auth::user() && Auth::user()->hasRole('admin'))
            <li class="nav-item {{ Request::is('book') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.addbooking') }}">Add Bookings</a>
            </li>
        @endif --}}

        {{-- <li class="nav-item {{ Request::is('users') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('users') }}">Users</a>
        </li> --}}
    {{-- </ul>  --}}
{{-- </div>  --}}
