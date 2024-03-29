
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

       
       
    </head>
    <body>
        
        <h3>Editando o produto {{$produto->nompro}}</h3>
        
        <form action="{{route('produto.update', $produto->codpro)}}" method="post">
            @csrf
            @method('patch')
            
            <label for="nompro">Nome do produto</label><br/>
            <input type="text" name="nompro" id="nompro" value="{{$produto->nompro}}"/><br/><br/>
            
            <label for="despro">Descrição</label><br/>
            <input type="text" name="despro" id="despro" value="{{$produto->despro}}"/><br/><br/>
            
            <label for="vlrpro">Valor</label><br/>
            <input type="text" name="vlrpro" id="vlrpro" value="{{$produto->vlrpro}}"/><br/><br/>
            
            <label for="codcat">Código da categoria</label><br/>
            <input type="text" name="codcat" id="numcli" value="{{$produto->codcat}}"/><br/><br/>
            
            
            <button type="submit">Editar</button>
            
        </form>
        
    </body>
</html>


