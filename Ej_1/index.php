<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Document</title>
  <link rel="stylesheet" href="estilo.css" />
</head>

<body>

  <?php

  $xml = simplexml_load_file("datos.xml");

  ?>

  <div class="container">
    <header class="cabecera">

      <img src="images/lollapalooza_logo.svg" class="logo" />


    </header>


    <nav class="navbar">
      <ul>
        <li><a href="#programa" id="link1" class="anchor">Programa</a></li>
        <li><a href="#donde-estamos">Dónde estamos</a></li>
        <li><a href="#tickets">Tickets</a></li>
      </ul>
    </nav>
    <div class="header-video"></div>

    <div class="principal">
      <section class="programa panel">



        <table>
          <h1 id="programa">PROGRAMA</h1>

          <thead>

            <tr>

              <th>Nombre</th>
              <th>Localidad</th>
              <th>Creación</th>

            </tr>


          </thead>

          <tbody>



            <?php

            foreach ($xml->grupo as $valor1) {

              echo ("<tr>");
              echo ("<td>$valor1->nombre_grupo</td>");
              echo ("<td>$valor1->localidad</td>");
              echo ("<td>$valor1->año_creacion</td>");
              echo ("</tr>");
            }

            ?>




          </tbody>


        </table>


        <img src="images/lollapalooza_lineup.jpg" alt="lineup" />


      </section>

      <section class="donde-estamos panel">



        <div class="mapouter">
          <div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=grant%20park&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net/blog/nordvpn-coupon-code/"></a></div>

        </div>

        <h1 id="donde-estamos">DÓNDE ESTAMOS</h1>


        <div class="grid-container image-wrapper">
          <div class="a"><img src="images/chicago_1.jpg" alt=""></div>
          <div class="b"><img src="images/chicago_2.jpg" alt=""></div>
          <div class="c"><img src="images/chicago_3.jpg" alt=""></div>
          <div class="d"><img src="images/chicago_4.jpg" alt=""></div>
        </div>




      </section>

      <section class="tickets panel">
        <h1 id="tickets">TICKETS</h1>

        <form action="">

          <label for="nombre">Nombre:</label><br>
          <input type="text"><br>
          <label for="edad">Edad:</label><br>
          <input type="text"><br>
          <label for="dni">DNI:</label><br>

          <label for="tipo_entrada">Tipo de entrada:</label><br>

          <select name="opciones">

            <option value="regular">Regular pass</option>
            <option value="vip">VIP pass</option>
            <option value="hardcore">Hardcore pass</option>

          </select><br>

          <label for="n_entradas">Nº de entradas (máximo de 5):</label><br>
          <input type="number" min="1" max="5"><br>

          <input type="button" value="Confirmar" class="confirm-button">



        </form>

      </section>
    </div>

    <footer class="footer">

      <small>Copyright dosmildiesinueve &#169;</small><br>
      <div class="social-media">

        <p>Síguenos:</p><br>

        <a href=""> <img class="media" src="images/logo-facebook.svg" alt="Logo Facebook"></a>
        <a href=""><img class="media" src="images/logo-instagram.svg" alt="Logo Instagram"></a>
        <a href=""><img class="media" src="images/logo-twitter.svg" alt="Logo Twitter"></a>
        <a href=""><img class="media" src="images/logo-youtube.svg" alt="Logo Youtube"></a>
      </div>

    </footer>
  </div>
</body>

</html>