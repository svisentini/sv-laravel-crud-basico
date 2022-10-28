<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Excluir um produto</title>
    </head>
    <body>
    <form action="{{ route('excluir_produto',['id' => $prod->id]) }}" method="POST">
            @csrf
            <label for="">Tem certeza que deseja excluir o produto?</label> <br />
            <input type="text" name="nome" value="{{ $prod->nome }}"> <br />        
            <button>Sim</button>     
        </form>
    </body>
</html>
            