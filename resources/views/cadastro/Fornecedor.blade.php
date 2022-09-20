@extends('layouts.main')
@extends('layouts.menu')

@section('title', 'Cadastro Fornecedor')

@section('content')

<div class="container-xl mt-3">

    <h1>Cadastrar Fornecedor</h1>

    @error('fornecedores') <div class="alert alert-danger">{{ $message }}</div> @enderror

    @if(session('msg')) <div class="alert alert-success">{{ session('msg') }}</div> @endif

    <form action="{{ route('fornecedor.create') }}" method="POST" class="row">
        <div class="col-4">
            @csrf
            <label for="setor" class="form-label">Setor </label>
            <input type="text" class="form-control" name="fornecedores" id="fornecedores">

             <button type="submit" class="btn btn-primary mt-2">Cadastrar</button>
             <a href="/" class="btn btn-secondary mt-2">voltar</a>
            </div>
    </form>

    <div class="table-responsive mt-2 mb-2">
        <table class="table table-hover">
            <tr>
                <th class="col-2">ID</th>
                <th class="col-6">Setor</th>
                <th class="col-1">Editar</th>
                <th class="col-1">Deletar</th>
            </tr>

            @foreach ($fornecedores as $fornecedor)
                <form action="{{ route('fornecedor.delete', $fornecedor->id ) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <tr>
                        <td>{{$fornecedor->id}}</td>
                        <td>{{$fornecedor->fornecedores}}</td>
                        <td><a href="{{route('fornecedor.showEditar', $fornecedor->id)}}" class="btn btn-primary">Editar</a></td>
                        <td><button type="submit" class="btn btn-danger" >Deletar</button></td>
                    </tr>
                </form>
            @endforeach
        </table>
    </div>

</div>
@endsection
