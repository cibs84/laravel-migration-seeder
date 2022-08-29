<header>
    <nav>
        <ul>
            <li><a href="{{ route('homepage') }}">Homepage</a></li>
            <li><a href="{{ route('trips', ['place' => 'mare']) }}">Viaggi al mare</a></li>
            <li><a href="{{ route('trips', ['place' => 'montagna']) }}">Viaggi in montagna</a></li>
            <li><a href="{{ route('trips', ['place' => 'città']) }}">Viaggi in città</a></li>
        </ul>
    </nav>
</header>