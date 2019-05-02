<?php include_once 'includes/templates/header.php'; ?>

        <section class="seccion contenedor">
            <h2>'QUETZA', tu mejor opción de alquiler</h2>
            <p>
             El mejor Portal Web para encontrar alojamiento cercano a alguno de los 16 Centros Universitarios con los que cuenta la Universidad de Guadalajara.
             <br><br> No dudes más y ponte en contacto con nosotros para apoyarte en todas tus dudas y encuentres el mejor lugar para hospedarte.
            </p>
        </section> <!--seccion-->

          <?php include_once 'includes/templates/invitados.php'; ?>


        <div class="contador parallax">
            <div class="contenedor">
                <ul class="resumen-evento clearfix">
                    <li><p class="numero">0</p> Alquileres</li>
                    <li><p class="numero">0</p> Inquilinos</li>
                    <li><p class="numero">0</p> Disponibles</li>
                    <li><p class="numero">0</p> Reservados</li>

                </ul>
            </div>
        </div>

        <section class="precios seccion">
            <h2>Ofertas del día</h2>
            <div class="contenedor">
                  <ul class="lista-precios clearfix">
                      <li>
                            <div class="tabla-precio">
                                <h3>Zapopan</h3>
                                <p class="numero">$2,200</p>
                                <ul>
                                  <li>Habitación compartida</li>
                                  <li>Sala comedor y patio</li>
                                  <li>Agua, gas, luz e internet.</li>
                                </ul>
                                <a href="#" class="button hollow">Alquilar</a>
                            </div>
                      </li>
                      <li>
                            <div class="tabla-precio">
                                <h3>Guadalajara</h3>
                                <p class="numero">$1,800</p>
                                <ul>
                                  <li>Habitación compartida</li>
                                  <li>2 baños separados</li>
                                  <li>Agua, luz e internet</li>
                                </ul>
                                <a href="#" class="button">Alquilar</a>
                            </div>
                      </li>

                      <li>
                            <div class="tabla-precio">
                                <h3>Tlaquepaque</h3>
                                <p class="numero">$3,100</p>
                                <ul>
                                  <li>Habitación individual</li>
                                  <li>A 4 cuadras de CUCEI</li>
                                  <li>Agua, luz, gas e internet</li>
                                </ul>
                                <a href="#" class="button hollow">Alquilar</a>
                            </div>
                      </li>
                  </ul>
            </div>
        </section>

        <div id="mapa" class="mapa"></div>

        <section class="seccion">
            <h2>Testimonios</h2>
            <div class="testimoniales contenedor clearfix">
                <div class="testimonial">
                    <blockquote>
                      <p>Estudiar Licenciatura en Cultura Física y Deportes otorga la posibilidad de generar relaciones humanas que permiten intercambio cultural que enriquece el interior de las personas que son parte de ella.<br><br>El conocimiento de otras naciones y culturas me permitió descubrir una amplia gama de herramientas y oportunidades que invitan a desarrollarse a nivel personal y profesional, pues no existen fronteras o límites.<p>
                      <footer class="info-testimonial clearfix">
                          <img src="img/testimonial01.jpg" alt="imagen testimonial">
                          <cite>Ángela Mariel Martínez Orozco.(México) <span>Estudiante de Cultura Física y Deportes.|CUCS|</span></cite>
                      </footer>
                    </blockquote>
                </div><!--.testimonial-->
                <div class="testimonial">
                    <blockquote>
                      <p>Mi nombre es Johana Milena, actualmente soy estudiante de la carrera de Tecnologías de la Información en CUCEA, lo cual me hace sentir muy feliz y agradecida con todos. El recibimiento ha sido extraordinario. <br><br>
                      Sin embargo había sido un gran reto encontrar alojamiento con buena ubicación y a buen precio...<br><br>
                      Hasta que me encontré con Quetza y sin duda fue lo mejor que me pudo pasar ya que los dueños de la casa son muy amables y me ayudan en cada cosa que necesito.<p>
                      <footer class="info-testimonial clearfix">
                          <img src="img/testimonial02.jpg" alt="imagen testimonial">
                          <cite>Johana Milena Torres León (Colombia)<span>Estudiante de Tecnologías de la Información.|CUCEA|</span></cite>

                      </footer>
                    </blockquote>
                </div><!--.testimonial-->
                <div class="testimonial">
                    <blockquote>
                      <p>Undoubtedly, one of the most powerful experiences I have lived, having the fortune to continue my studies at the University of Guadalajara, Mexico was the best thing that could have happened to me.
                      <br><br>
                      The human warmth of my hosts was spectacular, it was an experience that left me tattooed in every way because they helped me a lot whenever I needed it.
                      <br><br>
                      I highly recommend the owners of the place and I greatly appreciate the QUETZA portal for making this possible.<p>
                      <footer class="info-testimonial clearfix">
                          <img src="img/testimonial03.jpg" alt="imagen testimonial">
                          <cite>Matt Vechione (U,S,A) <span>Civil Engineer Student. |CUCEI|</span></cite>
                      </footer>
                    </blockquote>
                </div><!--.testimonial-->
            </div>
        </section>

        <div class="newsletter parallax">
            <div class="contenido contenedor">
                <p> regístrate a los promocionales:</p>
                <h3>QUETZA</h3>
                <a href="#mc_embed_signup" class="boton_newsletter button transparente">Registro</a>
            </div> <!--.contenido-->
        </div><!--.newsletter-->

<!--        <section class="seccion">
            <h2>Faltan</h2>
            <div class="cuenta-regresiva contenedor">
                <ul class="clearfix">
                    <li><p id="dias" class="numero"></p> días</li>
                    <li><p id="horas" class="numero"></p> horas</li>
                    <li><p id="minutos" class="numero"></p> minutos</li>
                    <li><p id="segundos" class="numero"></p> segundos</li>
                </ul>
            </div>
        </section>
-->
  <?php include_once 'includes/templates/footer.php'; ?>
