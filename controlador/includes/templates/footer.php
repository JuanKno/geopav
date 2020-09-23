<footer class="site-footer">
  <div class="contenedor clearfix">

    <div class="footer-informacion">
      <h3>Sobre <span>GdlWebCamp</span></h3>
      <p>
        "Mucha gente pequeña, en lugares pequeños, haciendo cosas pequeñas, pueden cambiar el mundo". Esta página es una iniciativa que nació en San Cristóbal con el motivo de fortalecer la comunidad y los proyectos que surgen en ella, la idea principal realizar eventos con los diferentes grupos sociales del corregimiento en diferentes fechas y con el dinero que se recoja donarlo a los sectores vulnerables y ayudar a aquellas personas que lo necesitan</p>
    </div>

    <div class="ultimos-tweets">
      <h3>Últimos <span>Tweets</span></h3>
      <ul>
        <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga corporis eaque optio repudiandae vitae cum ea? Tempora ea fuga mollitia sint quam!</li>
        <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga corporis eaque optio repudiandae vitae cum ea? Tempora ea fuga mollitia sint quam!</li>
        <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga corporis eaque optio repudiandae vitae cum ea? Tempora ea fuga mollitia sint quam!</li>
      </ul>
    </div>

    <div class="menu">
      <h3>Redes <span>Sociales</span></h3>
      <nav class="redes-sociales">
        <a href=""><i class="fab fa-facebook-f"></i></a>
        <a href=""><i class="fab fa-twitter"></i></a>
        <a href=""><i class="fab fa-pinterest-p"></i></a>
        <a href=""><i class="fab fa-youtube"></i></a>
        <a href=""><i class="fab fa-instagram"></i></a>
      </nav>
    </div>

  </div>

  <p class="copyright">
    Todos los derechos reservados GOEPAV 2020.
  </p>

</footer>


<script src="./vista/js/vendor/modernizr-3.8.0.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

<script src="./vista/js/plugins.js"></script>
<script src="./vista/js/jquery.animateNumber.min.js"></script>
<script src="./vista/js/jquery.countdown.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>


<?php
$archivo = basename($_SERVER['PHP_SELF']);
$pagina = str_replace(".php", "", $archivo);
if ($pagina == 'invitados' || $pagina == 'index') {
  echo ' <script src="./vista/js/jquery.colorbox-min.js"></script>';
} else if ($pagina == 'conferencia') {
  echo ' <script src="./vista/js/lightbox.js"></script>';
}
?>

<script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
<script src="./vista/js/main.js"></script>

<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
<script type="text/javascript" src="//downloads.mailchimp.com/js/signup-forms/popup/unique-methods/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script>
<script type="text/javascript">
  window.dojoRequire(["mojo/signup-forms/Loader"], function(L) {
    L.start({
      "baseUrl": "mc.us18.list-manage.com",
      "uuid": "4fd560c05f1ba31cfab7913ce",
      "lid": "aadb7285ba",
      "uniqueMethods": true
    })
  });
</script>
<script>
  window.ga = function() {
    ga.q.push(arguments)
  };
  ga.q = [];
  ga.l = +new Date;
  ga('create', 'UA-XXXXX-Y', 'auto');
  ga('set', 'transport', 'beacon');
  ga('send', 'pageview');
</script>
<script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>