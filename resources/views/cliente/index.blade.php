<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <script>
            window.onload = function(){
                @if(session()->get('msg'))
                alert ('{{session()->get('msg')}}');
                @endif
            }
        </script>
       
    </head>
    <body>
        
        <a href="{{route('cliente.create')}}">Adicionar Cliente</a><br/>
        
        <!--Listagem de clientes-->
        <table>
            <thead>
                <tr>
                    <td>Cód.</td>
                    <td>Nome</td>
                    <td>CPF</td>
                    <td>Endereço</td>
                    <td>Nº</td>
                    <td>Bairro</td>
                    <td>Cidade</td>
                    <td>UF</td>
                    <td>Telefone</td>
                    <td>Ação</td>
                </tr>
            </thead>
            
            <tbody>
                @foreach ($clientes as $cl)
                <tr>
                    <td>{{$cl->codcli}}</td>
                     <td>{{$cl->nomcli}}</td>
                      <td>{{$cl->cpfcli}}</td>
                       <td>{{$cl->endcli}}</td>
                        <td>{{$cl->numcli}}</td>
                         <td>{{$cl->baicli}}</td>
                         <td>{{$cl->cidcli}}</td>
                          <td>{{$cl->ufcli}}</td>
                           <td>{{$cl->telcli}}</td>
                           <td>
                          
                          <button onclick="location.href='{{route('cliente.edit', $cl->codcli)}}'" type="button">Editar</button>
                      
                          <form action="{{route('cliente.destroy', $cl->codcli)}}" method="post"> 
                          @csrf
                          @method('DELETE')
                          <button type="submit">Excluir</button>
                          </form>
                          
                      </td>
                </tr>
                @endforeach
               
            </tbody>
        
        </table>
        
    </body>
</html>

