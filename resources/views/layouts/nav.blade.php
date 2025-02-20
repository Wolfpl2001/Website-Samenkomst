<link rel="stylesheet" href="{{ asset('css/nav.css') }}">
<nav>
    <ul>
        @if (!Auth::check())
            <li><a href="{{ route('login.submit') }}">Login</a></li>
        @else
            <li><a href="#" onclick="push()">Logout</a></li>
        @endif
        <li><a href="{{route('dashboard')}}">Home</a></li>
        <li><a href="#">Kameroverzicht</a></li>
        <li><a href="{{route('reserviring')}}">Reserviring</a></li>
        @if(Auth::check() && Auth::user()->role == 'admin')
            <li><a href="{{route('user.show')}}">Beheren</a></li>
        @endif
    </ul>
    <input type="text" placeholder="Zoeken">
</nav>
<script>
    function push() {
        fetch("{{ route('logout') }}", {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({})
        }).then(response => {
            if (response.ok) {
                window.location.href = "{{ route('start') }}"; 
            } else {
                console.error('Logout failed');
            }
        }).catch(error => console.error('Error:', error));
    }
</script>

