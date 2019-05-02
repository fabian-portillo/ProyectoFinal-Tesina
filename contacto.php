<link rel="stylesheet" type="text/css" href="css/estiloContacto.css">
<?php include_once 'includes/templates/header.php'; ?>

        <section class="seccion contenedor">
            <h2>contáctanos sin compromiso </h2>
            <p>
             No dudes en decirnos todas tus inquietudes ya que estamos dispuestos a colaborar en toda la medida de lo posible.
             <br>En los apartados que verás a continuación encontrarás nuestra ubicación de las oficinas centrales y el formulario de contacto.
            </p>
        </section> <!--seccion-->

    <div class="contenido">
        <main>
            <article>
            </article>
            <article>
                <h2>Ubicación</h2>
                <div class="ubicacion">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d119602.67880768496!2d-103.60806906837234!3d20.482284284612415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m5!1s0x842f55c97e974a2d%3A0x1c5169581f5d2e55!2sDucoragro+S.A.+de+C.V.%2C+Tlajomulco+de+Z%C3%BA%C3%B1iga%2C+Jalisco!3m2!1d20.4821375!2d-103.5380273!4m0!5e0!3m2!1ses-419!2smx!4v1537415299628" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe> 
                </div>
                
          </article>

            <form action="enviar.php" method="post">
            <h2>CONTÁCTENOS</h2>
              <input type="text" name="nombre" placeholder="Nombre" required>
              <input type="text" name="apellidos" placeholder="Apellidos" required>
              <input type="text" name="correo" placeholder="Correo" required>
              <input type="text" name="telefono" placeholder="Teléfono" required>
              <input type="text" name="asunto" placeholder="Asunto" required>
              <textarea name="mensaje" placeholder="Escriba aqui su mensaje" required></textarea>
              <input type="submit" value="ENVIAR" id="boton">
        </form>

      </main>

  <?php include_once 'includes/templates/footer.php'; ?>
