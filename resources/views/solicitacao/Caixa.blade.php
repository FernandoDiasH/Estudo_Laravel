@extends('layouts.main')
@extends('layouts.menu')

@section('title', 'Lançamento')

@section('content')
<div class="container mt-3">
    <h1>Solicitação em Caixa</h1>

    @if(session('msg')) <div class="alert alert-success">{{ session('msg') }}</div> @endif

    <form action="{{ route('caixa.create') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-3">
                <label for="data" class="form-label">Data solicitação</label>
                <input type="date" class="form-control" name="dataSolicitada" id="dataSolicitada">

            </div>
            <div class="col-5">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" name="nome" id="nome">
            </div>
            <div class="col-3">
                <label for="valorSolicitado" class="form-label">Valor solicitado</label><br>
                <input type="number" class="form-control" name="valorSolicitado" id="valorSolicitado" >
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-3">
                <label for="setor" class="form-label">Setor/Operação</label>
                <select name="setor_id" class="form-select" id="setor">
                    <option value="" selected disabled>Selecione..</option>

                    @foreach ($setores as $setor )
                        <option value="{{$setor->id}}">{{$setor->setor}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-5">
                <label for="Descricao" class="form-label">Descrição</label><br>
                <input type="text" class="form-control" name="descricao" id="descricao" >
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-4">
                <button type="submit" class="btn btn-primary">Lançar</button>
                <a href="/" class="btn btn-secondary">voltar</a>
            </div>
        </div>
    </form>


</div>
@endsection
