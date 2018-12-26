<!DOCTYPE html>
<html lang="es-ES">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Obresa constructora</title>
  <link rel="icon" type="image/png" href="img/home/logo.png">
	<meta name="author" content="Josep Fayos Miñana">
	<meta name="keywords" content="obresa, construcción, gandia, reformas, rehabilitacion, interiores, franquicias, hosteleras">
	<meta name="description" content="Empresa de construcción líder en la safor con las técnicas más avanzadas en la ejecución de sus obras.">
	<meta property="og:image" content="img/home/logo.png">
  <!-- Normalize -->
  <link rel="stylesheet" href="https://yarnpkg.com/en/package/normalize.css" />
  <!-- Font Awesome 5.4.1 -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz"
    crossorigin="anonymous" />
  <!-- Tailswind -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet" />
  <!-- VueJS -->
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  <!-- Lodash -->
  <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.11/lodash.min.js"></script>
  <!-- Estilos -->
  <link rel="stylesheet" href="css/main.css" />
  <!-- Axios -->
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <!-- JS -->
  <script src="js/main.js"></script>
</head>

<body>
  <div id="app">
    <header class="header">
      <!-- SPINER -->
      <section class="loading" v-if="loading">
        <div class="lds-spinner">
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          <div></div>
        </div>
      </section>
      <nav class="menu">
        <!-- LOGO DEL HEADER -->
        <div class="logo--header"><img src="img/home/logo.png" alt="Logo de Obresa" /></div>
        <!-- NAV BAR BUTTON -->
        <button class="nav-bar" @click="isNavBarCerrado = !isNavBarCerrado"><i class="fas fa-bars"></i></button>
        <!-- ul ENLACES -->
        <ul class="menu-enlaces" :class="{menuEnlacesAbierto: isNavBarCerrado}">
          <li><a href="#contacto">Contacto</a></li>
          <li><a href="porfolio.html">Portafolio</a></li>
          <li><a href="SobreObresa.html">Sobre Obresa</a></li>
          <li><a href="#noticias">Noticias</a></li>
        </ul>
      </nav>
      <!-- cuando es false esta la clase construyendoFuturo, es true se activa la clase animacionCerrar y desaparece la anterior -->
      <section v-bind:class=" { contruyendoFuturo: !isCerrado, animacionCerrar: isCerrado }">
        <div class="servicios-header" v-bind:class=" { fondoNaranja: isCerrado }">
          <h1>
            Construyendo<br />
            <span>tu futuro</span>
          </h1>
          <a href="porfolio.html" class="servicios-header--iconos">
            <div class="servicios-header--iconos-ico">
              <img src="img/iconos/build.png" alt="Icono de fontawesome" />
            </div>
            <span href="#">Franquicias Hosteleras</span>
          </a>
          <a href="porfolio.html" class="servicios-header--iconos">
            <div class="servicios-header--iconos-ico">
              <img src="img/iconos/casa.png" alt="Icono de fontawesome" />
            </div>
            <span href="#">Reformas e interiores</span>
          </a>
          <a href="porfolio.html" class="servicios-header--iconos">
            <div class="servicios-header--iconos-ico">
              <img src="img/iconos/grua.png" alt="Icono de freepik" />
            </div>
            <span href="#">rehabilitación de fachadas</span>
          </a>
          <a href="porfolio.html" class="servicios-header--iconos">
            <div class="servicios-header--iconos-ico">
              <img src="img/iconos/obrero.png" alt="Icono de freepik" />
            </div>
            <span href="#">Obra civil e industrial</span>
          </a>
        </div>
        <!-- Div que utilizamos para cerrar la animacion del header -->
        <div class="flecha--izq" @click="isCerrado = !isCerrado"><i class="fas fa-angle-left"></i></div>
      </section>
      <section class="cuadrado-inferior--container">
        <div class="cuadrado-inferior--padding">
          <div class="cuadrado-inferior">
            <h3>
              Empresa de contrución <br />
              en la safor
            </h3>
            <h4>Descubre nuestro portafolio:</h4>
            <a href="#">Empezar</a>
          </div>
        </div>
      </section>
    </header>
    <main class="main">
      <section class="sobre-obresa">
        <div class="sobre-obresa--img">
          <img src="img/home/sobreObresa.jpeg" alt="Imagen de Obresa" />
        </div>
        <div class="sobre-obresa--texto">
          <h3>
            Sobre Obresa <br />
            <span>Construyendo tu futuro</span>
          </h3>
          <div class="texto-circles">
            <i class="fas fa-circle circle-claro"></i>
            <i class="fas fa-circle circle-medio"></i>
            <i class="fas fa-circle circle-oscuro"></i>
          </div>
          <p>
            En <strong>Obresa construcciones</strong>, garantizamos un elevado
            nivel de profesionalidad gracias al
            <strong>talento y al esfuerzo</strong> de su nuestro equipo humano
            y profesional, inspirado en una filosofía de mejora continua, que
            nos ha permitido consolidarnos dentro del sector de la
            construcción.
          </p>
          <p>
            Nuestro principal objetivo es garantizar la
            <strong>calidad integral de las obras</strong>, con el fin de
            generar el máximo grado de satisfacción en nuestros clientes.
            <strong>Nos adaptamos a cualquier necesidad</strong>, con
            soluciones integrales ofreciendo el mejor servicio posible en el
            <strong>sector de la construcción</strong>.
          </p>
          <p>
            Nuestra amplia experiencia nos capacita para ofrecer
            <strong>resultados satisfactorios</strong> en todas las
            circunstancias.
          </p>
          <a href="SobreObresa.html" class="sobre-obresa--button">Saber más</a>
        </div>
      </section>
      <!-- SERVICIOS ------------------------------->
      <section class="servicios">
        <h3>Nuestros servicios</h3>
        <div class="servicios--contenedor">
          <a href="porfolio.html">
            <img src="img/iconos/build.png" alt="Icono de fontawesomev" />
            <span>Franquicias hosteleras</span>
            <p>Ha sido la apuesta más ambiciosa de la empresa en los últimos años y la que ha conseguido dar proyección
              nacional a
              Obresa. Ha propiciado un salto cualitativo y organizativo de la
              mercantil de manera
              que nos permite en la actualidad acometer proyectos de envergadura por toda España y ampliar así nuestro
              horizonte de
              mercado.</p>
          </a>
          <a href="porfolio.html">
            <img src="img/iconos/casa.png" alt="Icono de fontawesome" />
            <span>Reformas e interiores</span>
            <p>
              Ofrecemos un servicio de gestión integral del proyecto, desde su concepción y diseño, hasta su
              tramitación,
              construcción y finalización bajo la modalidad de “llaves en mano”.
            </p>
          </a>
          <a href="porfolio.html">
            <img src="img/iconos/grua.png" alt="Icono de freepik" />
            <span>Rehabilitación de fachadas</span>
            <p>con una división especializada de la plantilla propia de la empresa, compuesta por técnicos y personal
              de obra
              específico experto en la rehabilitación estructural y de fachadas de edificios, especialmente las
              sometidas a
              condiciones climatológicas agresivas (ambientes marinos, actividades industriales intensivas, etc.).</p>
          </a>
          <a href="porfolio.html">
            <img src="img/iconos/obrero.png" alt="Icono de freepik" />
            <span>Obra civil e industrial</span>
            <p>Ante un nicho de mercado en auge progresivo, la empresa ha destinado sendos equipos de manera permanente
              para efectuar
              tareas de mantenimiento industrial, de manera que ofrece servicio, eficacia y rapidez ante cualquier
              incidencia, no sólo en tareas de conservación ordinarias, sino
              también para la proyección de naves de nueva ejecución o ampliación de las existentes.</p>
          </a>
        </div>
      </section>
      <!-- CARACTERISTICAS -------------------------------->
      <section class="caracteristicas">
        <h3 id="caracteristicas--titulo">Características</h3>
        <div class="container--caracteristicas">
          <div class="col--caracteristicas">
            <i class="far fa-calendar-check"></i>
            <h3>Compromiso</h3>
            <hr />
            <p>
              EN Obresa construcciones no tenemos clientes, sino personas con
              necesidades. Nuestro objetivo es encontrar siempre la mejor
              solución en infraestructuras.
            </p>
          </div>
          <div class="col--caracteristicas">
            <i class="fas fa-chess"></i>
            <h3>Innovación</h3>
            <hr />
            <p>
              Pensamos que cada construcción es diferente y acometerla con
              éxito requiere un detallado estudio y planificación de la obra.
            </p>
          </div>
          <div class="col--caracteristicas">
            <i class="fas fa-hands-helping"></i>
            <h3>Profesionalidad</h3>
            <hr id="linea--pro" />
            <p>
              Disponemos de un equipo técnico y humano altamente cualificado,
              capaz de decidir la solución idónea para cada situación
              planteada.
            </p>
          </div>
          <div class="col--caracteristicas">
            <i class="far fa-address-card"></i>
            <h3>Garantia</h3>
            <hr id="linea--garantia" />
            <p>
              Ofrecemos atención personalizada y de calidad a todos nuestros
              clientes. La amplia trayectoria profesional con la que contamos
              en el sector de la construcción nos avala como una empresa
              responsable y comprometida.
            </p>
          </div>
        </div>
      </section>
      <!-- NOTICIAS ------------------------------------------>
      <section class="noticias" id="noticias">
        <div class="noticias--titulo">
          <h3>Últimas noticias</h3>
        </div>
        <div class="noticias--contenedor">
          <a href="https://www.facebook.com/Obresa/photos/pcb.558243524621481/558234351289065/?type=3&theater" class="col--noticias">
            <img src="img/obras/franquicias/dominos-Vinaros/imgPrincipal.jpg" alt="Imagen de Obresa" />
            <h3>Finalizamos Dominos en Vinaròs</h3>
            <div class="col--noticias-button">
              <button href="https://www.facebook.com/Obresa/photos/pcb.558243524621481/558234351289065/?type=3&theater">Ver noticia</button>
            </div>
          </a>
          <a href="https://www.facebook.com/Obresa/photos/pcb.459209917858176/459206934525141/?type=3&theater" class="col--noticias">
            <img src="img/obras/interiores/colomets/imgPrincipal.jpg" alt="Imagen de Obresa" />
            <h3>Reforma de vivienda en Gandia</h3>
            <div class="col--noticias-button">
              <button href="https://www.facebook.com/Obresa/photos/pcb.459209917858176/459206934525141/?type=3&theater">Ver noticia</button>
            </div>
          </a>
        </div>
      </section>
      <section class="contacto" id="contacto">
        <h3 class="contacto--titulo">Contacta con nosotros</h3>
        <div class="container--formulario">
          <?php 
            if(isset($_POST['submit'])){
                if(isset($_POST['disclaimer'])) {
                    $to = "j.fayos@itdigitel.es"; // Tu email
                    $from = $_POST['email'];
                    $name = $_POST['name'];
                    $subject = "Mensaje enviado";
                    $subject2 = "Copia del mensaje";
                    $message = $name . " escribió lo siguiente:" . "\n\n" . $_POST['message'];
                    $message2 = "Esto es una copia del mensaje " . $name . "\n\n" . $_POST['message'];

                    $headers = "From:" . $from;
                    $headers2 = "From:" . $to;
                    mail($to,$subject,$message,$headers);
                    mail($from,$subject2,$message2,$headers2); // Envia una copia a la persona. Si no lo quieres, borra esta línea.
                    echo "Mensaje enviado. Gracias " .$_name . ", me pondré en contacto lo antes posible.";
                } else {
                    echo 'Debe acertar las condiones de uso y privacidad';
                }
            }
          ?>
          <form action="#formulario-contacto" method="post" id="formulario-contacto">
            <div class="formulario--nombre">
              <label for="name"><i class="fas fa-user"></i></label>
              <input type="text" name="name" id="name" class="large" placeholder="Nombre" />
            </div>
            <div class="formulario--email">
              <label for="email"><i class="fas fa-envelope"></i></label>
              <input type="email" name="email" id="email" class="large" placeholder="E-mail" />
            </div>
            <div class="formulario--mensaje">
              <label for="message"><i class="fas fa-pencil-alt"></i></label>
              <textarea name="message" id="message" class="large" id="lapiz" placeholder="Escriba su mensaje..."></textarea>
            </div>
            <div class="formulario--checkbox">
              <input type="checkbox" name="disclaimer" id="disclaimer" />
              <label for="disclaimer">Acepto las
                <a href="#">condiciones de uso y privacidad</a></label>
            </div>
            <div class="formulario--submit">
              <input type="submit" name="submit" value="Enviar mensaje" />
            </div>
          </form>
        </div>
      </section>
      <section class="localizacion">
        <div class="localizacion--titulo">
          <h3>Dónde nos puedes encontrar</h3>
          <a href="#">Av. de valencia, 34, Gandia, Valencia 46702</a>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3101.8271545558305!2d-0.18452278464738203!3d38.97361457955898!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd61e831624489b3%3A0xae8ead642efba17e!2sCarrer+Valencia%2C+37%2C+46701+Gand%C3%ADa%2C+Valencia!5e0!3m2!1ses!2ses!4v1543517129299"
          frameborder="0" style="border:0" allowfullscreen></iframe>
      </section>
    </main>
    <footer class="footer">
      <div class="footer--logo"><img src="img/home/logo.png" alt="" /></div>
      <div class="footer--info">
        <h3>Información sobre obresa</h3>
        <a href="#">Aviso de privacidad</a> 
        <a href="http://www.jyjwebdesign.com/">Desarrollador</a>
        <a href="#">Preguntas frecuentes</a>
      </div>
      <div class="footer--contacto">
        <h3>Contacto</h3>
        <span><i class="fas fa-phone"></i><a href="tel:+34 962 851 700">962 851 700</a></span>
        <span><i class="fas fa-envelope"></i><a href="mailto:info@obresa.es">info@obresa.es</a></span>
        <span><i class="fas fa-map-marker-alt"></i><a href="https://goo.gl/maps/F8mG1Af8rTR2">Av. de Valencia 37, Gandía, Valencia, 46701</a></span>
      </div>
      <div class="footer--redes">
        <h3>Redes sociales</h3>
        <a href="https://www.facebook.com/Obresa/"><i class="fab fa-facebook-f"></i></a>
        <a href="https://www.instagram.com/obresaconstructora/"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-youtube"></i></a>
      </div>
    </footer>
  </div>
</body>

</html>