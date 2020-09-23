    <?php
    include_once './controlador/includes/templates/header.php';
    ?>

    <section class="seccion contenedor">
      <h2>Ayudémonos entre todos</h2>
      <p>"Mucha gente pequeña, en lugares pequeños, haciendo cosas pequeñas, pueden cambiar el mundo". Esta página
        es una iniciativa que nació en San Cristóbal con el motivo de fortalecer la comunidad y los proyectos que surgen
        en ella, la idea principal realizar eventos con los diferentes grupos sociales del corregimiento en diferentes fechas
        y con el dinero que se recoja donarlo a los sectores vulnerables y ayudar a aquellas personas que lo necesitan
      </p>

    </section>
    <!--seccion-->

    <section class="programa">
      <div class="contenedor-video">
        <video autoplay loop poster="./vista/img/bg-talleres.jpg">
          <source src="./vista/video/video.mp4" type="video/mp4">
          <source src="./vista/video/video.webm" type="video/webm">
          <source src="./vista/video/video.ogv" type="video/ogv">
        </video>
      </div>
      <!--Contenedor video-->

      <div class="contenido-programa">
        <div class="contenedor">
          <div class="programa-evento">
            <h2>Actividades del evento</h2>
            <nav class="menu-programa">
              <a href="#talleres"><i class="fa fa-pencil-alt"></i> Talleres</a>
              <a href="#conferencias"><i class="fa fa-comment"></i> Conferencia</a>
              <a href="#seminarios"><i class="fa fa-users"></i> Clases</a>
            </nav>

            <div id="talleres" class="info-curso ocultar clearfix">
              <div class="detalle-evento">
                <h3>Taller de fotografía</h3>
                <p><i class="fa fa-clock"></i> 16:00 hrs</p>
                <p><i class="fa fa-calendar"></i> 10 de dic</p>
                <p><i class="fa fa-user"></i>Davier Garcia</p>
              </div>

              <div class="detalle-evento">
                <h3>Taller de pintura</h3>
                <p><i class="fa fa-clock"></i> 20:00 hrs</p>
                <p><i class="fa fa-calendar"></i> 10 de dic</p>
                <p><i class="fa fa-user"></i>Susana Sanchez</p>
              </div>

              <a href="#" class="button float-right">Ver todos</a>

            </div>
            <!--ID talleres-->

            <div id="conferencias" class="info-curso ocultar clearfix">
              <div class="detalle-evento">
                <h3>Carreras del futuro</h3>
                <p><i class="fa fa-clock"></i> 10:00 hrs</p>
                <p><i class="fa fa-calendar"></i> 10 de dic</p>
                <p><i class="fa fa-user"></i>Daniel Sanchez</p>
              </div>

              <div class="detalle-evento">
                <h3>Redes sociales</h3>
                <p><i class="fa fa-clock"></i> 17:00 hrs</p>
                <p><i class="fa fa-calendar"></i> 10 de dic</p>
                <p><i class="fa fa-user"></i>Carolina Rivera</p>
              </div>

              <a href="#" class="button float-right">Ver todos</a>

            </div>
            <!--ID conferencias-->

            <div id="seminarios" class="info-curso ocultar clearfix">
              <div class="detalle-evento">
                <h3>Clases de matemáticas</h3>
                <p><i class="fa fa-clock"></i> 17:00 hrs</p>
                <p><i class="fa fa-calendar"></i> 11 de dic</p>
                <p><i class="fa fa-user"></i>Camilo Bautista</p>
              </div>

              <div class="detalle-evento">
                <h3>Clases de guitarra</h3>
                <p><i class="fa fa-clock"></i> 10:00 hrs</p>
                <p><i class="fa fa-calendar"></i> 11 de dic</p>
                <p><i class="fa fa-user"></i>Daniela Herrera</p>
              </div>

              <a href="#" class="button float-right">Ver todos</a>

            </div>
            <!--ID talleres-->

          </div>
          <!--Programa evento-->
        </div>
        <!--contenedor -->
      </div>
      <!--Contenido del programa-->
    </section>
    <!--Programa-->

    <?php
    include_once './controlador/includes/templates/invitados.php';
    ?>



    <div class="contador parallax">
      <div class="contenedor">
        <ul class="resumen-evento clearfix">
          <li>
            <p class="numero"></p> Invitados
          </li>
          <li>
            <p class="numero"></p> Talleres
          </li>
          <li>
            <p class="numero"></p> Dias
          </li>
          <li>
            <p class="numero"></p> Conferencias
          </li>
        </ul>
      </div>
    </div>

    <section class="precios seccion ">
      <h2>Precios</h2>
      <div class="contenedor">
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
              <a href="" class="button hollow">Comprar</a>
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
              <a href="" class="button">Comprar</a>
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
              <a href="" class="button hollow">Comprar</a>
            </div>
          </li>
        </ul>
      </div>
    </section>

    <div id="mapa" class="mapa"></div>

    <section class="seccion">
      <h2>Testimoniales</h2>
      <div class="testimoniales contenedor clearfix">

        <div class="testimonial">
          <blockquote>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis obcaecati perspiciatis distinctio suscipit? Ex nam at debitis sunt ipsum, blanditiis obcaecati non beatae aspernatur similique quo unde laudantium repellendus dolore.</p>

            <footer class="info-testimonial clearfix">
              <img src="./vista/img/testimonial.jpg" alt="Imagen testimonial">
              <cite>Beatriz Elena<span>Prefesora I.E San Cristóbal</span> </cite>

            </footer>
          </blockquote>
        </div>
        <!--Fin del testimonial-->

        <div class="testimonial">
          <blockquote>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis obcaecati perspiciatis distinctio suscipit? Ex nam at debitis sunt ipsum, blanditiis obcaecati non beatae aspernatur similique quo unde laudantium repellendus dolore.</p>

            <footer class="info-testimonial clearfix">
              <img src="./vista/img/testimonial.jpg" alt="Imagen testimonial">
              <cite>Xiomara gómez<span>Estudiante I.E San Cristóbal</span> </cite>

            </footer>
          </blockquote>
        </div>
        <!--Fin del testimonial-->

        <div class="testimonial">
          <blockquote>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis obcaecati perspiciatis distinctio suscipit? Ex nam at debitis sunt ipsum, blanditiis obcaecati non beatae aspernatur similique quo unde laudantium repellendus dolore.</p>

            <footer class="info-testimonial clearfix">
              <img src="./vista/img/testimonial.jpg" alt="Imagen testimonial">
              <cite>Maria Antonia<span>Estudiante I.E San Cristóbal</span> </cite>

            </footer>
          </blockquote>
        </div>
        <!--Fin del testimonial-->

      </div>
    </section>

    <div class="newsletter parallax">
      <div class="contenido contenedor">
        <p>Registrate al newsletter</p>
        <h3>GOEPAV</h3>
        <a href="#" class="button transparente">Registro</a>
      </div>
      <!--Contenido-->
    </div>
    <!--Newsletter-->

    <section class="seccion">
      <h2>Falta para la gran donación:</h2>
      <div class="cuenta-regresiva contenedor">
        <ul class="clearfix">
          <li>
            <p id="dias" class="numero"></p> días
          </li>
          <li>
            <p id="horas" class="numero"></p> horas
          </li>
          <li>
            <p id="minutos" class="numero"></p> minutos
          </li>
          <li>
            <p id="segundos" class="numero"></p> segundos
          </li>
        </ul>
      </div>
    </section>


    <?php
    include_once './controlador/includes/templates/footer.php';
    ?>