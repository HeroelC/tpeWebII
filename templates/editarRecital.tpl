{include file="header.tpl"}

<div class="container">
  <div class="row">
    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
      <div class="bordeArribaNews">
        <h1>CONCERTS</h1>
      </div>

          <form action="actualizarRecital/{$Recital[0]['id_recital']}" method="post">

            <input type="text" placeholder="{$Recital[0]['nombre']}" name="nombre" value="{$Recital[0]['nombre']}">
            <input type="number" placeholder="{$Recital[0]['precio']}" name="precio" value="{$Recital[0]['precio']}">

              <select name="estadio_id">
                {foreach from=$Estadios item=estadio}

                  <option value="{$estadio['id_estadio']}">{$estadio['nombre']}</option>

                  {/foreach}
              </select>

            <button type="submit" class="btn-danger" name="button">Cargar</button>

           </form>

            <div class="bordeAbajoNews col-lg-12 col-md-12 col-sm-12 col-xs-12">

            </div>

            </div>
      </div>
</div>

{include file="footer.tpl"}
