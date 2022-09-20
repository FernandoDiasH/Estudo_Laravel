@extends('layouts.main')
@extends('layouts.menu')

@section('title', 'Editar Categoria')

@section('content')
    <h1>Editar Categoria</h1>
    @error('categorias') <div class="alert alert-danger">{{ $message }}</div> @enderror




    <form action="{{route('categoria.editar', $categoria->id)}}" class="row" method="post">
        @csrf
        <div class="col-4">
            <input type="text" class="form-control" name="categorias" id="categorias" value="{{$categoria->categorias}}">
            <button type="submit" class="btn btn-primary mt-3">Editar</button>
            <a href="{{route('categoria')}}" class="btn btn-secondary mt-3">Voltar</a>
        </div>
    </form>


@endsection
