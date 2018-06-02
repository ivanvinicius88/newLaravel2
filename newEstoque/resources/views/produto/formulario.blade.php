@extends('layout/principal')

@section('conteudo')

<br>
<div class="container ">   
    <br>
    <h1 class="mt-5 mb-4 text-center">Novo produto</h1>
    <hr>
    <form method="post" action="/produtos/adiciona">

        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
        
        <div class="form-row">
            <div class="form-group">
                <label>Nome</label>
                <input name="nome" class="form-control " type="text" />
            </div>
            <div class="form-group">
                <label>Valor</label>
                <input name="valor" class="form-control col-md-7" type="text" />
            </div>    
        </div>       
        <div class="form-row">

            <div class="form-group">        
                <label>Descricao</label>
                <input name="descricao" class="form-control mx-1 " type="text"/>
            </div>
            <div class="form-group">    
                <label>Quantidade</label>
                <input name="quantidade" class="form-control mx-1 col-md-5" type="number"/>
            </div>
        </div>        
        <div class="form-row">
            <div class="form-group">
                <button class="btn btn-success" name="enviar" type="submit">Enviar</button>
                <button class="btn btn-danger" name="apagar" type="reset">Apagar</button>
            </div>
        </div>
    </form>

</div>