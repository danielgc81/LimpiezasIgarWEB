<?php
   session_start();

   if (isset($_SESSION['username'])) {
      $username = $_SESSION['username'];
   }
?>

<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" href="src/img/logo_empresa.png">
   <link rel="stylesheet" href="src/fonts/fontawesome-free-6.1.2-web/css/all.min.css">
   <link rel="stylesheet" href="CSS/styles.css">
   <title>Limpiezas Igar - Limpieza Top 1% Mundial</title>
</head>
<body>
   <header class="header">
      <div class="header__wrapper">
         <div class="header__img-container">
            <img src="src/img/logo_empresa.png" alt="Logo Limpiezas Igar" class="header__img">
         </div>
         <nav class="header__navigation">
            <ul class="navigation__list">
               <li class="navigation__option">
                  <a href="#" class="navigation__link">Inicio</a>
               </li>
               <li class="navigation__option">
                  <a href="aboutus.html" class="navigation__link">Quienes Somos</a>
               </li>
               <li class="navigation__option">
                  <a href="services.html" class="navigation__link">Servicios</a>
               </li>
               <li class="navigation__option">
                  <a href="contactus.html" class="navigation__link">Contactanos</a>
               </li>
               <li class="navigation__option">
                  <a href="gallery.html" class="navigation__link">Galeria</a>
               </li>
            </ul>
         </nav>
      </div>
      <div class="scroll__line"></div>
   </header>
   <main class="main__content">
      <section class="main__presentation">
         <div class="presentation__info">
            <p class="welcome__message">
               Bienvenido, <?php echo $username?>
            </p>
            <h1 class="presentation__title"><span class="title__background">Limpiezas</span> Iga<span class="title__white">r</span></h1>
            <p class="presentation__text">
               En Limpiezas Igar, nos enorgullece ofrecer servicios de limpieza profesional de alta calidad en Mieres, Moreda, Cabañaquinta (Asturias) y sus alrededores. Somos una empresa líder en el sector de la limpieza, comprometidos con la satisfacción del cliente y la excelencia en cada trabajo que…
            </p>
            <a href="aboutus.html" class="presentation__link">
               <button class="presentation__button">
                  Leer Más
               </button>
            </a>
         </div>
         <div class="presentation__contact-info">
            <p class="contact-info__phone">
               <a href="tel:+34985483434" class="link">+34 985 48 34 34</a>
            </p>
            <p class="contact-info__email">
               <a href="mailto:limpiezasigar69@gmail.com" class="link">limpiezasigar69@gmail.com</a>
            </p>
         </div>
      </section>
      <section class="main__services">
         <div class="services__info">
            <h2 class="services__title">NUESTROS SERVICIOS</h2>
            <div class="services__options">
               <article class="services__service service__glass">
                  <a href="services.html" class="service__anchor">
                     <div class="services__wrapper">
                        <h3 class="service__title hidden">Limpiezas de Cristales</h3>
                        <p class="service__text hidden">
                           En Limpiezas Igar, ofrecemos servicios especializados de limpieza
                           de cristales en Mieres, Moreda, Cabañaquinta y sus alrededores. Sabemos que los cristales
                           limpios y relucientes pueden...
                        </p>
                     </div>
                  </a>
               </article>
               <article class="services__service service__community">
                  <a href="services.html" class="service__anchor">
                     <div class="services__wrapper">
                        <h3 class="service__title hidden">Limpiezas de Comunidad</h3>
                        <p class="service__text hidden">
                           En Limpiezas Igar nos enorgullece ofrecer servicios especializados en
                           limpiezas de comunidades en Mieres, Moreda y Cabañaquinta y sus alrededores.
                           Sabemos que mantener las áreas comunes limpias y ordenadas
                           las áreas comunes de tu...
                        </p>
                     </div>
                  </a>
               </article>
               <article class="services__service service__private">
                  <a href="services.html" class="service__anchor">
                     <div class="services__wrapper">
                        <h3 class="service__title hidden">Limpiezas de Particulares</h3>
                        <p class="service__text hidden">
                           En Limpiezas Igar, nos dedicamos a ofrecer servicios profesionales
                           de limpieza para particulares en Mieres, Moreda, Cabañaquinta
                           y sus alrededores. Entendemos que tu hogar es tu refugio, un lugar
                           donde te sientes cómodo y relajado. Es por eso que nuestro equipo de limpieza...
                        </p>
                     </div>
                  </a>
               </article>
            </div>
            <a href="services.html" class="service__link">
               <button class="service__button">
                  Ver Todos Los Servicios
               </button>
            </a>
         </div>
      </section>
      <section class="main__reviews">
         <article class="main__reviews-container">
            <div class="reviews__review">
               <div class="review__img-customer">
                  <img src="src/img/gonzalo.png" alt="Gonzalo">
               </div>
               <div class="review__person">
                  <p class="review__text">
                     "Contraté a Limpiezas Igar para la limpieza de mi oficina y estoy muy satisfecho con los resultados. Su equipo fue puntual, profesional y dejó mi espacio impecable. ¡Ahora puedo recibir a mis clientes en un entorno limpio y agradable! Recomiendo encarecidamente sus servicios de limpieza de oficinas"
                  </p>
                  <p class="review__user-name">Gonzalo</p>
               </div>
               <img src="src/img/imagen-5Estrellas.png" alt="5 Esrellas de Valoracion" class="review__five--stars">
            </div>
            <article class="reviews__review">
               <div class="review__img-customer">
                  <img src="src/img/Juan.png" alt="Juan">
               </div>
               <div class="review__person">
                  <p class="review__text">
                     "Recientemente contraté a Limpiezas Igar para una limpieza general de mi nave industrial. Su equipo hizo un trabajo excepcional y superó mis expectativas. No solo realizaron una limpieza minuciosa, sino que también se encargaron de los detalles más difíciles. Ahora mi nave está limpia y lista para recibir a mis clientes."
                  </p>
                  <p class="review__user-name">Juan</p>
               </div>
               <img src="src/img/imagen-5Estrellas.png" alt="5 Esrellas de Valoracion" class="review__five--stars">
            </article>
            <article class="reviews__review">
               <div class="review__img-customer">
                  <img src="src/img/luis.png" alt="Luis">
               </div>
               <div class="review__person">
                  <p class="review__text">
                     "Necesitaba una limpieza a fondo en mi casa y decidí contratar a Limpiezas Igar. Fueron muy detallistas en su trabajo y lograron resultados sorprendentes. Mi casa quedó reluciente y fresca. El equipo fue amable, respetuoso y se aseguró de cubrir todas mis necesidades."
                  </p>
                  <p class="review__user-name">Luis</p>
               </div>
               <img src="src/img/imagen-5Estrellas.png" alt="5 Esrellas de Valoracion" class="review__five--stars">
            </article>
         </div>
      </div>
   </main>
   <footer class="footer">
      <div class="footer__wrapper">
         <section class="footer__links">
            <nav class="footer__nav-footer">
               <h4 class="nav-footer__title">Enlaces útiles</h4>
               <ul class="nav-footer__list">
                  <li class="nav-footer__option"><a href="#" class="nav-footer__link">Inicio</a></li>
                  <li class="nav-footer__option"><a href="aboutus.html" class="nav-footer__link">¿Quienes Somos?</a></li>
                  <li class="nav-footer__option"><a href="services.html" class="nav-footer__link">Servicios</a></li>
                  <li class="nav-footer__option"><a href="contactus.html" class="nav-footer__link">Contactanos</a></li>
                  <li class="nav-footer__option"><a href="gallery.html" class="nav-footer__link">Galería</a></li>
               </ul>
            </nav>
            <div class="footer__services-footer">
               <h4 class="services-footer__title">Servicios</h4>
               <ul class="services-footer__list">
                  <li class="services-footer__option"><a href="services.html" class="services-footer__link">Limpiezas de Cristales</a></li>
                  <li class="services-footer__option"><a href="services.html" class="services-footer__link">Limpiezas de Comunidades</a></li>
                  <li class="services-footer__option"><a href="services.html" class="services-footer__link">Limpiezas Particulares</a></li>
                  <li class="services-footer__option"><a href="services.html" class="services-footer__link">Limpiezas de Naves</a></li>
                  <li class="services-footer__option"><a href="services.html" class="services-footer__link">Limpiezas de Oficinas</a></li>
               </ul>
            </div>
            <div class="footer__social-media">
               <ul>
                  <li><a href="https://github.com/danielgc81/LimpiezasIgarWEB" target="_blank"><i class="fa-brands fa-github icon"></i></a></li>
                  <li>
                     <a href="https://www.facebook.com" target="_blank"><i class="fa-brands fa-facebook icon"></i></a>
                  </li>
                  <li>
                     <a href="https://www.instagram.com" target="_blank"><i class="fa-brands fa-instagram icon"></i></a>
                  </li>
               </ul>
            </div>
         </section>
         <section class="footer__company-info">
            <div class="company-info__img-container">
               <img src="src/img/logo_empresa.png" alt="Logo Limpiezas Igar" class="img-container__logo">
            </div>
            <div class="footer__schedule">
               <p>
                  Lunes a Viernes, 7:00 hasta 18:00
               </p>
               <p>
                  Sábados, 10:00 hasta 16:00
               </p>
               <p>
                  Domingos, Cerrado
               </p>
            </div>
            <div class="footer__company-iframe">
               <iframe src="https://www.google.com/maps/embed?pb=!4v1738584573981!6m8!1m7!1sF7Tj8csCbyzO91pEBMrsAg!2m2!1d43.17056762600777!2d-5.740775574283763!3f347.2827090544325!4f-2.832366779533274!5f1.1924812503605782" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
         </section>
      </div>
   </footer>
   <script src="JS/script.js"></script>
</body>
</html>
