
@extends('layout/principal')

@section('conteudo')


<h1 class="my-5 text-center">Detalhes Do Produto</h1>
<table class="table table-striped table-bordered">
            <tr>
                <td class="text-center h6">Nome</td>
                <td class="text-center h6">Valor</td>
                <td class="text-center h6">Descrição</td>
                <td class="text-center h6">Quantidade</td>
            </tr>
            <tr>
                <td class="text-center">{{ $p->nome }}</td>
                <td class="text-center">{{ $p->valor }}</td>
                <td class="text-center">{{ $p->descricao }}</td>
                <td class="text-center">{{ $p->quantidade }}</td>
            </tr>
        </table>
@stop