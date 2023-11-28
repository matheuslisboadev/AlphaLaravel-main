@extends('layout.app')
    @section('main')
    <style>
    .card{
        display: inline-block;
       margin-top: 3%;
        position: relative;
    }

</style>
<h1>
{{$categoria->CATEGORIA_NOME}}</h1>



@foreach($categoria->Produtos as $produto)



<div class="card" style="width: 18rem;">
        @if (count($produto->ProdutoImagem)>0 )
        <img src="{{$produto->ProdutoImagem[0]->IMAGEM_URL}}" class="card-img-top" alt="...">
        @else
        <img src="../img/indisponivel.jpg" class="card-img-top" alt="...">
        @endif
        <div class="card-body">
            <h5 class="card-title">{{$produto->PRODUTO_NOME}}</h5>
       
            <p class="card-text">R${{$produto->PRODUTO_PRECO}}</p>
            <a href="{{route('produto.show', $produto->PRODUTO_ID)}}"><button type="submit" id="botao" class="buttonLogin">Comprar</button></a>
        </div>
    </div>


@endforeach
@endsection
