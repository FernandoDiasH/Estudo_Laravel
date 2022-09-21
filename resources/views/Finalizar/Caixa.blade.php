@extends('layouts.main')
@extends('layouts.menu')

@section('title', 'Lançamento')

@section('content')
<div class="container mt-3">
    <h1>Finalização em Caixa</h1>

    @if(session('msg')) <div class="alert alert-success">{{ session('msg') }}</div> @endif

    
    <form action="{{ route('caixa.finalizar', $getCaixa->id) }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-3">
                <label for="data" class="form-label">Data solicitação</label>
                <input type="date" class="form-control" name="dataSolicitada" id="dataSolicitada" value="{{$getCaixa->dataSolicitada}}" disabled>

            </div>
            <div class="col-5">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" name="nome" id="nome" value="{{$getCaixa->nome}}" disabled>
            </div>
            <div class="col-3">
                <label for="valorSolicitado" class="form-label">Valor solicitado</label><br>
                <input type="number" class="form-control" name="valorSolicitado" id="valorSolicitado" value="{{$getCaixa->valorSolicitado}}" disabled >
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-3">
                <label for="setor" class="form-label">Setor/Operação</label>
                <input type="text" name="setor" id="setor" class="form-control" value="{{$getCaixa->setor}}" disabled>
            </div>
            <div class="col-5">
                <label for="Descricao" class="form-label">Descrição</label><br>
                <input type="text" class="form-control" name="descricao" id="descricao" value="{{$getCaixa->descricao}}" disabled>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-2">
                <label for="numeroNF" class="form-label">N° NF</label>
                <input type="text" name="numeroNF" id="numeroNF" class="form-control">
            </div>
            <div class="col-3">
                <label for="valorGasto" class="form-label">Valor Gasto</label>
                <input type="number" name="valorGasto" id="valorGasto" class="form-control">
            </div>
            <div class="col-3">
                <label for="troco" class="form-label">Troco</label>
                <input type="number" name="troco" id="troco" class="form-control">
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-4">
                <button type="submit" class="btn btn-primary">Lançar</button>
                <a href="{{route('listarCaixa')}}" class="btn btn-secondary">voltar</a>
            </div>
        </div>
    </form>


</div>
@endsection
