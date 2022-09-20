@extends('layouts.main')
@extends('layouts.menu')

@section('title', 'Editar fornecedor')

@section('content')
    <h1>Editar Fornecedor </h1>
    @error('fornecedores') <div class="alert alert-danger">{{ $message }}</div> @enderror





    <form action="{{route('fornecedor.editar', $fornecedor->id)}}" class="row" method="post">
        @csrf
        <div class="col-4">
            <input type="text" class="form-control" name="fornecedores" id="fornecedores" value="{{$fornecedor->fornecedores}}">
            <button type="submit" class="btn btn-primary mt-3">Editar</button>
            <a href="{{route('fornecedor')}}" class="btn btn-secondary mt-3">Voltar</a>
        </div>
    </form>



@endsection
