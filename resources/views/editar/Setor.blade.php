@extends('layouts.main')
@extends('layouts.menu')

@section('title', 'Editar Setor')

@section('content')
    <h1>Editar setor</h1>
    @error('setor') <div class="alert alert-danger">{{ $message }}</div> @enderror

    <form action="{{route('setor.editar', $setor->id)}}" class="row" method="post">
        @csrf

        <div class="col-4">
            <input type="text" class="form-control" name="setor" id="setor" value="{{$setor->setor}}">
            <button type="submit" class="btn btn-primary mt-3">Editar</button>
            <a href="{{route('setor')}}" class="btn btn-secondary mt-3">Voltar</a>
        </div>
    </form>


@endsection
