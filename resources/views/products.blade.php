@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

<h1>Menu de produtos</h1>

@if($busca != '')
    <p>El usuario está buscando{{ $busca }} </p>
@endif

@endsection
