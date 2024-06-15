@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Menu Eventos</h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-events-container">
    @if(count($events) > 0)

    @else
        <p>Aun no tienes eventos, <a href="/events/create">crear evento</a></p>
    @endif
</div>

@endsection
