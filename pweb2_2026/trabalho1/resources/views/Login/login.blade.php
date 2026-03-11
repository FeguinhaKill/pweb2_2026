<form action="/login" method="post">
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Nome </label>
    <input type="nome" class="form-control" id="nome" placeholder="Nome..."></div>
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="email@gmail.com">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="senha" placeholder="senha...">
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>