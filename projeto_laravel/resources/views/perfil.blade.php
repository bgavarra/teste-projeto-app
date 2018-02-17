<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Testando rota de perfil</h1>
    <div>
      <div>

        Nome: {{$usr}}<br>
        Email: <br>
        Telefone: <br><br><br>
      </div>

      <form action="" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="file" name="photo">
        <input type="submit">
      </form>
    </div>
  </body>
</html>
