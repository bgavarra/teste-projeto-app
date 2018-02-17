<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div>

      <thead class="thead-inverse">
        <tr>
          <td>nome</td>
          <br>
          <td>email</td>
          <br>
          <td>telefone</td>
          <br>
          <td>endereco</td>
          <br>
          <td>categorias</td>
          <br><br><br>
        </tr>
      </thead>
      <tbody class="">
        @foreach($usuarios as $usr)
        <tr>
          <td>
            <form method="POST" action="{{route('rotaVerPerfil')}}">
              {!! csrf_field() !!}
            <!-- <a href="/verPerfil/{{$usr->email}}">{{$usr->nome}}</a> -->
              <button type="submit" name="usr" value="{{$usr->email}}">Ver Perfil</button>
            </form>
          </td>
          <br>
          <td>{{$usr->email}}</td>
          <br>
          <td>{{$usr->telefone}}</td>
          <br>
          <td>{{$usr->endereco}}</td>
          <br>
          <td>{{$usr->categorias}}</td>
          <br>
          <br>
          <br>
        </tr>
        @endforeach
      </tbody>
    </div>
  </body>
</html>
