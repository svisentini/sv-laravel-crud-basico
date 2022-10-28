<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ver um produto</title>
    </head>
    <body>
    <form action="{{ route('alterar_produto',['id' => $prod->id]) }}" method="POST">
            @csrf
            <label for="">Nome</label> <br />
            <input type="text" name="nome" value="{{ $prod->nome }}"> <br />        
            <label for="">Custo</label> <br />
            <input type="text" name="custo" value="{{ $prod->custo }}"> <br />        
            <label for="">Preco</label> <br />
            <input type="text" name="preco" value="{{ $prod->preco }}"> <br />        
            <label for="">Quantidade</label> <br />
            <input type="text" name="quantidade" value="{{ $prod->quantidade }}"> <br />   
            <button>Salvar</button>     
        </form>
    </body>
</html>
            