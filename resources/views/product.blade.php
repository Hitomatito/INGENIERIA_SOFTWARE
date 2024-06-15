@extends('layouts.main')

@section('title', 'Produto')

@section('content')

    @if($id != null)
        <p>Mostrando ID del producto: {{ $id }}</p>
    @endif

@endsection
