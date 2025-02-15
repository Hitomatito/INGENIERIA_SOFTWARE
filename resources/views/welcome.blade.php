@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

<div id="search-container" class="col-md-12">
    <h1>Busque un evento</h1>
    <form action="/" method="GET">
        <input type="text" id="search" name="search" class="form-control" placeholder="Buscar...">
    </form>
</div>
<div id="events-container" class="col-md-12">
    @if($search)
        <h2>Buscando por: {{ $search }}</h2>
    @else
        <h2>Próximos Eventos</h2>
        <p class="subtitle">Ver los eventos de los próximos dias</p>
    @endif
    <div class="row" id="cards-container">
        @foreach($events as $event)
        <div class="card col-md-3">
            <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}">
            <div class="card-body">
                <p class="card-date">{{ date('d/m/Y', strtotime($event->date)) }}</p>
                <h5 class="card-title">{{ $event->title }}</h5>
                <p class="card-participants">{{ count($event->users) }} Participantes</p>
                <a href="/events/{{ $event->id }}" class="btn btn-primary">Saber mas</a>
            </div>
        </div>
        @endforeach
        @if(count($events) == 0 && $search)
            <p>no se puede encontrar ningun evento {{ $search }}! <a href="/">Ver todos</a></p>
        @elseif(count($events) == 0)
            <p>No hay eventos disponibles</p>
        @endif
    </div>
</div>

<!-- COMENTÁRIO HTML  -->
{{-- Comentário do BLADE --}}

@endsection
