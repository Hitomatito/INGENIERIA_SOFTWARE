@extends('layouts.main')

@section('title', 'Criar evento')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crea tu  evento</h1>
    <form action="/events" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image">Imagem del Evento:</label>
            <input type="file" id="image" name="image" class="form-control-file">
        </div>
        <div class="form-group">
            <label for="title">Evento:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nombre de evento">
        </div>
        <div class="form-group">
            <label for="date">Datos del evento:</label>
            <input type="date" class="form-control" id="date" name="date">
        </div>
        <div class="form-group">
            <label for="title">Ciudad:</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Local de evento">
        </div>
        <div class="form-group">
            <label for="title">el evento es privado?</label>
            <select name="private" id="private" class="form-control">
                <option value="0">No</option>
                <option value="1">Si</option>
            </select>
        </div>
        <div class="form-group">
            <label for="title">Descripcion:</label>
            <textarea name="description" id="description" class="form-control" placeholder="¿Qué pasará en el evento?"></textarea>
        </div>
        <div class="form-group">
            <label for="title">agregar elementos de infraestrutura:</label>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Cadeiras"> sillas
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Palco"> Etapa
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Bebidas"> Bebidas
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Open Food"> Open Food
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Brindes"> Brindes
            </div>
        </div>
        <input type="submit" class="btn btn-primary" value="Crear Evento">
    </form>
</div>

@endsection
