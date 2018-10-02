<div class="container">
    <div class="row">
      <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
        <div class="bordeArribaNews">
          <h1>STADIUM</h1>
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Name</th>
                  <th scope="col">Capacity</th>
                </tr>
              </thead>
              <tbody id="tablaTour">
                {foreach from=$Estadios item=estadio}

                <tr>
                  <td>{$estadio['id_estadio']}</td><td>{$estadio['nombre']}</td><td>{$estadio['capacidad']}<a href=eliminarEstadio/{$estadio['id_estadio']}>Borrar</a></td>
                </tr>

                {/foreach}
              </tbody>
            </table>

            <form action="agregarEstadio" method="post">
                <input type="text" placeholder="name" name="nombre" value="">
                <input type="number" placeholder="capacity" name="capacidad" value="">
                <button type="submit" class="btn-danger" name="button">Cargar</button>
            </form>

          </div>
        </div>
        <div class="bordeAbajoNews col-lg-12 col-md-12 col-sm-12 col-xs-12">

        </div>
      </div>
    </div>
  </div>
