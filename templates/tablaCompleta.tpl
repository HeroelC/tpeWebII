<div class="container">
  <div class="row">
    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
      <div class="bordeArribaNews">
        <h1>CONCERTS</h1>
      </div>

          <table class="table">
            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Stadium</th>
                <th scope="col">Capacity</th>
              </tr>
            </thead>
            <tbody id="tablaTour">
              {foreach from=$Tabla item=fila}

                <tr>
                  <td>{$fila['recital']}</td><td>{$fila['precio']}</td><td> <a href="tour/{$fila['id_estadio']}">{$fila['estadio']}</a> </td><td>{$fila['capacidad']}</td>
                  <td> <a class="btn btn-danger" href="detalleRecital/{$fila['id_recital']}">Details</a> </td>
                </tr>

              {/foreach}
            </tbody>
          </table>

            <div class="bordeAbajoNews col-lg-12 col-md-12 col-sm-12 col-xs-12">

            </div>

            </div>
      </div>
</div>
