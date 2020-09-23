  <?php
  include_once './controlador/includes/templates/header.php'
  ?>

  <section class="seccion contenedor">

    <h2>registro de usuarios</h2>
    <form id="registro" class="registro" action="pagar.php" method="POST">
      <div id="datos_usuario" class="registro caja clearfix">

        <div class="campo">
          <label for="nombre">Nombre</label>
          <input type="text" id="nombre" name="nombre" placeholder="Tu nombre">
        </div>

        <div class="campo">
          <label for="apellido">apellido</label>
          <input type="text" id="apellido" name="apellido" placeholder="Tu apellido">
        </div>

        <div class="campo">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" placeholder="Tu email">
        </div>
        <div id="error"></div>

      </div>
      <!--Final de datos usuario-->

      <div id="paquetes" class="paquetes">
        <h3>Elije el número de boletos</h3>

        <ul class="lista-precios clearfix">

          <li>
            <div class="tabla-precio">
              <h3>pase por día</h3>
              <p class="numero">$5</p>

              <ul>
                <li>Bocadillos gratis</li>
                <li>Todas las conferencias</li>
                <li>Todos los talleres</li>
              </ul>
              <div class="orden">
                <label for="pase_dia">Boletos deseados</label>
                <input type="number" min="0" id="pase_dia" size="3" name="boletos[un_dia][cantidad]" placeholder="0">
                <input type="hidden" value="5" name="boletos[un_dia][precio]">
              </div>
            </div>
          </li>

          <li>
            <div class="tabla-precio">
              <h3>Todos los días</h3>
              <p class="numero">$15</p>

              <ul>
                <li>Bocadillos gratis</li>
                <li>Todas las conferencias</li>
                <li>Todos los talleres</li>
              </ul>
              <div class="orden">
                <label for="pase_completo">Boletos deseados</label>
                <input type="number" min="0" id="pase_completo" size="3" name="boletos[completo][cantidad]" placeholder="0">
                <input type="hidden" value="15" name="boletos[completo][precio]">
              </div>
            </div>
          </li>

          <li>
            <div class="tabla-precio">
              <h3>pase dos días</h3>
              <p class="numero">$10</p>

              <ul>
                <li>Bocadillos gratis</li>
                <li>Todas las conferencias</li>
                <li>Todos los talleres</li>
              </ul>
              <div class="orden">
                <label for="pase_dosdias">Boletos deseados</label>
                <input type="number" min="0" id="pase_dosdias" size="3" name="boletos[2dias][cantidad]" placeholder="0">
                <input type="hidden" value="10" name="boletos[2dias][precio]">
              </div>
            </div>
          </li>
        </ul>
      </div>
      <!--Paquetes-->

      <div id="eventos" class="eventos clearfix">
        <h3>Elige tus talleres</h3>
        <div class="caja">
          <div id="viernes" class="contenido-dia clearfix">
            <h4>Viernes</h4>
            <div>
              <p>Clases:</p>
              <label><input type="checkbox" name="registro[]" id="clase_01" value="clase_01"><time>10:00</time> Clase de baile - Bachata </label>
              <label><input type="checkbox" name="registro[]" id="clase_02" value="clase_02"><time>12:00</time> Clase de guitarra </label>
            </div>
            <div>
              <p>Conferencias:</p>
              <label><input type="checkbox" name="registro[]" id="conf_01" value="conf_01"><time>14:00</time> Carreras del futuro </label>
              <label><input type="checkbox" name="registro[]" id="conf_02" value="conf_02"><time>20:00</time> Marketing Digital </label>
            </div>
            <div>
              <p>Talleres:</p>
              <label><input type="checkbox" name="registro[]" id="taller_01" value="taller_01"><time>17:00</time> Fotografía - sesión 1</label>
              <label><input type="checkbox" name="registro[]" id="taller_02" value="taller_02"><time>19:00</time> Pintura - sesión 1 </label>
            </div>
          </div>
          <!--#viernes-->
          <div id="sabado" class="contenido-dia clearfix">
            <h4>Sábado</h4>
            <div>
              <p>Clases:</p>
              <label><input type="checkbox" name="registro[]" id="clase_03" value="clase_03"><time>10:00</time> Clase de baile - Merengue </label>
              <label><input type="checkbox" name="registro[]" id="clase_04" value="clase_04"><time>17:00</time> Clase de Piano </label>
            </div>
            <div>
              <p>Conferencias:</p>
              <label><input type="checkbox" name="registro[]" id="conf_03" value="conf_03"><time>19:00</time> Agricultura y desarrollo </label>
              <label><input type="checkbox" name="registro[]" id="conf_04" value="conf_04"><time>10:00</time> Redes Sociales </label>
            </div>
            <div>
              <p>Talleres:</p>
              <label><input type="checkbox" name="registro[]" id="taller_03" value="taller_03"><time>10:00</time> Fotografía - sesión 2</label>
              <label><input type="checkbox" name="registro[]" id="taller_04" value="taller_04"><time>12:00</time> Pintura - sesión 2 </label>
            </div>
          </div>
          <!--#sabado-->
          <div id="domingo" class="contenido-dia clearfix">
            <h4>Domingo</h4>
            <div>
              <p>Clases:</p>
              <label><input type="checkbox" name="registro[]" id="clase_05" value="clase_05"><time>17:00</time> Clase de baile - Bachata </label>
              <label><input type="checkbox" name="registro[]" id="clase_06" value="clase_06"><time>19:00</time> Clase de Flauta </label>
            </div>
            <div>
              <p>Conferencias:</p>
              <label><input type="checkbox" name="registro[]" id="conf_05" value="conf_05"><time>21:00</time> Universos alternos </label>
              <label><input type="checkbox" name="registro[]" id="conf_06" value="conf_06"><time>10:00</time> Como ganar dinero en línea </label>
            </div>
            <div>
              <p>Talleres:</p>
              <label><input type="checkbox" name="registro[]" id="taller_05" value="taller_05"><time>17:00</time> Fotografía - sesión 3</label>
              <label><input type="checkbox" name="registro[]" id="taller_06" value="taller_06"><time>19:00</time> Pintura - sesión 3 </label>
            </div>
          </div>
          <!--#domingo-->
        </div>
        <!--.caja-->
      </div>
      <!--#eventos-->

      <div id="resumen" class="resumen clearfix">
        <h3>Pago y extras</h3>
        <div class="caja clearfix">
          <div class="extras">

            <div class="orden">
              <label for="camisa_evento">Camisa del evento $10 <small>(Promoción 7% dto.)</small></label>
              <input type="number" min="0" id="camisa_evento" size="3" name="pedido_extra[camisas][cantidad]" placeholder="0">
              <input type="hidden" value="10" name="pedido_extra[camisas][precio]">
            </div>
            <!--Orden-->

            <div class="orden">
              <label for="etiquetas">Paquete de 10 etiquetas $2</small></label>
              <input type="number" min="0" id="etiquetas" name="pedido_extra[etiquetas][cantidad]" size="3" placeholder="0">
              <input type="hidden" value="2" name="pedido_extra[etiquetas][precio]">
            </div>
            <!--Orden-->

            <div class="orden">
              <label for="regalo">Seleccione un regalo</label> <br>
              <select id="regalo" name="regalo" required>
                <option value="">-- Seleccione un regalo --</option>
                <option value="2">Etiquetas</option>
                <option value="1">Pulsera</option>
                <option value="3">Pluma</option>
              </select>
            </div>
            <!--Orden-->

            <input type="button" id="calcular" class="button" value="calcular">
          </div>
          <!--Extras-->

          <div class="total">
            <p>Resumen</p>
            <div id="lista-productos">

            </div>
            <p>Total: </p>
            <div id="suma-total">

            </div>
            <input type="hidden" name="total_pedido" id="total_pedido">
            <input type="submit" id="btnRegistro" name="submit" class="button" value="Pagar">
          </div>
          <!--Total-->
        </div>
        <!--Caja-->
      </div>
      <!--Resumen-->
    </form>

  </section>

  <?php
  include_once './controlador/includes/templates/footer.php';
  ?>