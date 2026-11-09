@php
    $username = request('username');
    if ($username) {
        session(['username' => $username]);
    } else {
        $username = session('username', 'Ketua Kelas');
    }

    $currentRoute = request()->route()?->getName();
@endphp

<aside class="bg-blue-100/20 p-8 w-64 border-2 hidden md:flex flex-col">
    <div>
        <h1 class="text-3xl font-bold">MyUTS</h1>
        <p class="mb-4">{{$username}}</p>
        <ul class="space-y-4">
            <li><a href="{{ route('dashboard', ['username' => $username]) }}" class="nav-link {{ $currentRoute === 'dashboard' ? 'active' : '' }}">Dashboard</a></li>
            <li><a href="{{ route('pengelolaan', ['username' => $username]) }}" class="nav-link {{ $currentRoute === 'pengelolaan' ? 'active' : '' }}">Pengelolaan</a></li>
            <li><a href="{{ route('profile', ['username' => $username]) }}" class="nav-link {{ $currentRoute === 'profile' ? 'active' : '' }}">Profile</a></li>
        </ul>
    </div>
</aside>
