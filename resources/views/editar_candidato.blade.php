<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exemplo de CRUD</title>
</head>

<body>
    <h1>Editar: </h1>
    <br>
    <form action="/atualizar-candidato/{{ $candidato->id }}" method="POST">
        @csrf
        @method("PUT") <!-- Torna o envio do tipo PUT -->
        <label for="">Nome:</label>
        <input type="text" placeholder="Digite o seu nome..." name="nome_candidato" value="{{ $candidato->nome }}">
        <br><br>
        <label for="">Telefone</label>
        <input type="text" placeholder="Digite o seu telefone..." name="telefone_candidato" value="{{ $candidato->telefone }}">
        <br><br>
        <button>Enviar Cadastro</button>
    </form>

</body>

</html>
