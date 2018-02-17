<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Testando rota de cadastro</h1>
    <div>
      <form action="{{route('rotaCadastrar')}}" enctype="multipart/form-data" method="POST">
        {{csrf_field()}}
        Nome:<br>
        <input class="input" type="text" name="nome" value="">
        <br>
        Email:<br>
        <input class="input" type="email" name="email" value="">
        <br>
        Senha:<br>
        <input class="input" type="password" name="senha" value="">
        <br>
        CPF:<br>
        <input class="input" type="text" name="cpf" value="">
        <br>
        Telefone:<br>
        <input class="input" type="text" name="telefone" value="">
        <br>
        Endereço:<br>
        <input class="input" type="text" name="endereco" value="">
        <br>
        Categoria de serviço:<br>
        <input class="input" type="text" name="categorias" value="">
        <br>

        <input class="submit" type="submit" value="Cadastrar">
      </form>
    </div>
  </body>
</html>
