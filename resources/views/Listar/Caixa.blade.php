@extends('layouts.main')
@extends('layouts.menu')

@section('title', 'Listar Caixa')

@section('content')

<h1>Solicitações de Caixa</h1>

    <table class="table teble-hover mt-3">
        <div class="row">
            <tr>
                <th class="col-2">Data</th>
                <th class="col-2">Nome</th>
                <th class="col-2">Setor</th>
                <th class="col-2">Descrição</th>
                <th class="col-2">Valor</th>
                <th class="col-2">Situação</th>
            </tr>

            @foreach ($caixas as $caixa)
                <tr>
                    <td>{{$caixa->dataSolicitada}}</td>
                    <td>{{$caixa->nome}}</td>
                    <td>{{$caixa->setor}}</td>
                    <td>{{$caixa->descricao}}</td>
                    <td>{{$caixa->valorSolicitado}}</td>
                    <td><a href="{{route('caixa.showFinalizar', $caixa->id)}}" class="btn btn-primary">Finalizar</a></td>

                </tr>
             @endforeach
            </div>
    </table>




@endsection
