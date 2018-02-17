<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Testando rota de Busca</h1>
    <div>
      <form action="{{route('rotaResultadoBusca')}}" enctype="multipart/form-data" method="POST">
        {{csrf_field()}}
        Pesquisar categoria:<br>
        <input class="input" type="radio" name="categoria" value="desenvolvimento"> Desenvolvimento<br>
        <br>

        <input class="submit" type="submit" value="buscar">
      </form>
    </div>

  </body>
</html>
