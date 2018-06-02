
@extends('layout/principal')

@section('conteudo')

    @if(empty($produtos))
        <div class="alert alert-danger my-5">    
           <b>Você não tem nenhum produto cadastrado.</b>
        </div>
    @else
 
  <h1 class="text-center my-5">Listagem de produtos</h1><br>
        <table class="table table-striped table-bordered">
            <tr class="mb-1">
                <td class="text-center h6">Nome</td>
                <td class="text-center h6">Valor</td>
                <td class="text-center h6">Descrição</td>
                <td class="text-center h6">Quantidade</td>
                <td class="text-center h6">Pesquisar</td>
            </tr>
            @foreach ($produtos as $p)
            <tr >
                <td class="text-center">{{ $p->nome }}</td>
                <td class="text-center">{{ $p->valor }}</td>
                <td class="text-center">{{ $p->descricao }}</td>
                <td class="text-center {{ $p->quantidade <=1 ? 'table-danger' : '' }}">{{ $p->quantidade }}</td>
                <!-- <td class="text-center"><a  href="/produtos/mostra?id=<//?= $p->id ?>"><i class="fas fa-search mx-2 "></i></a></td> -->
                <td class="text-center"><a  href="/produtos/mostra/{{ $p->id }}"><i class="fas fa-search mx-2 "></i></a></td>
            </tr>
            @endforeach
        </table>
    @endif
@stop