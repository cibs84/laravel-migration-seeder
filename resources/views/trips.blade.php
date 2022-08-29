@extends('layouts.app')

@section('title_page')
    Viaggi @if ($place == 'mare')
        al mare
    @elseif ($place == 'montagna')
        in montagna
    @elseif ($place == 'città')
        in città
    @endif
@endsection

@section('main_content')
    <h1>Viaggi @if ($place == 'mare')
        al mare
    @elseif ($place == 'montagna')
        in montagna
    @elseif ($place == 'città')
        in città
    @endif
    </h1>

    @foreach ($trips as $item)
        <ul>
            <li>Città - {{ $item['place'] }}</li>
            <li>Descrizione - {{ $item['description'] }}</li>
            <li>Prezzo - {{ $item['price'] }}</li>
            <li>Disponibilità - {{ $item['is_available'] }}</li>
        </ul>
        <br>
    @endforeach
@endsection