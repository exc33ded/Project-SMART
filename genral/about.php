<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reveal Website Elements On Scroll - HTML, CSS & Javascript</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <script src="https://unpkg.com/scrollreveal"></script>
  </head>
  <body>

    <section class="sec-01">
      <div class="containers">
        <h2 class="main-title">Reveal Elements On Scroll</h2>
        <div class="content">
          <div class="image">
            <img src="../images/improved.jpg" alt="">
          </div>
          <div class="text-box">
            <h3>Lorem Ipsum</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
            aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
            aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
          </div>
        </div>
        <div class="media-icons">
          <a href="index.php" class="icon"><i class="fas fa-home"></i></a>
          <a href="about.php" class="icon"><i class="fas fa-child"></i></a>
          <a href="noticegenral.php" class="icon"><i class="fas fa-newspaper"></i></a>
          <a href="join.php" class="icon"><i class="fas fa-key"></i></a>
        </div>
      </div>
    </section>
    <section class="sec-02">
      <div class="containers">
        <h3 class="section-title">Lorem Ipsum</h3>
        <div class="content">
          <div class="image">
            <img src="img2.jpg" alt="">
          </div>
          <div class="info">
            <h4 class="info-title">Description</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
            aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
            aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
          </div>
        </div>
      </div>
    </section>
    <section class="sec-03">
      <div class="containers">
        <h3 class="section-title">Lorem Ipsum</h3>
        <div class="content">
          <div class="media-info">
            <li><a href="#"><i class="fab fa-linkedin"></i>Ahmad Raza Shibli</a></li>
            <li><a href="#"><i class="fab fa-instagram"></i>iamshibli23</a></li>
            <li><a href="#"><i class="fab fa-patreon"></i> Buy us a coffee</a></li>
            <li><a href="#"><i class="fab fa-instagram"></i>ihamza135</a></li>
            <li><a href="#"><i class="fab fa-linkedin"></i>Syed Mohammad Hamza Husain</a></li>
          </div>
          <div class="image">
            <img src="img3.jpg" alt="">
          </div>
        </div>
      </div>
    </section>

    <script>
      //common reveal options to create reveal animations
      ScrollReveal({
        //reset: true,
        distance: '60px',
        duration: 2500,
        delay: 400
      });

      //target elements, and specify options to create reveal animations
      ScrollReveal().reveal('.main-title, .section-title', { delay: 500, origin: 'left' });
      ScrollReveal().reveal('.sec-01 .image, .info', { delay: 600, origin: 'bottom' });
      ScrollReveal().reveal('.text-box', { delay: 700, origin: 'right' });
      ScrollReveal().reveal('.media-icons i', { delay: 500, origin: 'bottom', interval: 200 });
      ScrollReveal().reveal('.sec-02 .image, .sec-03 .image', { delay: 500, origin: 'top' });
      ScrollReveal().reveal('.media-info li', { delay: 500, origin: 'left', interval: 200 });
    </script>

  </body>
</html