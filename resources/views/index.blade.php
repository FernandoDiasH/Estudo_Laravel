@extends('layouts.main')
@extends('layouts.menu')
@section('title', 'Home')

@section('content')

    <table class="table table-hover mt-3">
        <div class="row">
            <tr>
                <th class="col-4">Descrição</th>
                <th class="col-4">Aberto</th>
                <th class="col-4">Mostrar</th>
            </tr>
            <tr>
                <td>Solicitações de Caixa</td>
                <td>{{$caixa}}</td>
                <td><a href="{{route('listarCaixa')}}" class="btn btn-primary">Mostrar</a></td>
            </tr>
        </div>

    </table>
    <div>
        
    </div>




@endsection

