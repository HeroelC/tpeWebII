{include file="header.tpl"}

{include file="nav.tpl"}

<div class="container">
  <div class="row articulo">
    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
      <div class="bordeArribaNews">
        <h1>LOGIN</h1>
      </div>

      <form action="agregarUsuario" method="post">

        <div class="form-group">
          <label for="exampleInputUser1">Username</label>
          <input type="text" class="form-control" name="nombre" placeholder="Enter username">
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" name="clave" placeholder="Password">
        </div>

        <button type="submit" class="btn btn-danger">Submit</button>
      </form>
    </div>
    <div class="bordeAbajoNews col-lg-10 col-md-10 col-sm-10 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">

    </div>
  </div>
</div> <!-- Fin container -->
{include file="footer.tpl"}
