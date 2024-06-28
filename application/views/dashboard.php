<body id="top">

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <a href="#" class="logo">SIPGAN Mandiri</a>

      <nav class="navbar container" data-navbar>
        <ul class="navbar-list">

          <li>
            <a href="#home" class="navbar-link" data-nav-link>Home</a>
          </li>

          <li>
            <a href="#form" class="navbar-link" data-nav-link>Formulir</a>
          </li>

          <li>
            <a href="#about" class="navbar-link" data-nav-link>Tentang Kami</a>
          </li>

        </ul>
      </nav>

      <button class="nav-toggle-btn" aria-label="Toggle menu" data-nav-toggler>
        <ion-icon name="menu-outline" class="open"></ion-icon>
        <ion-icon name="close-outline" class="close"></ion-icon>
      </button>

    </div>
  </header>





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="section hero" id="home" aria-label="hero">
        <div class="container">

          <div class="hero-content">

            <p class="hero-subtitle">SIPGAN Mandiri</p>

            <h1 class="h1 hero-title">Sistem Pembuatan Gugatan dan Permohonan Mandiri</h1>

            <a href="#form" class="btn btn-primary">Jenis Formulir</a>

          </div>

          <figure class="hero-banner">
            <img src="./assets/images/hero-banner.png" width="720" height="673" alt="hero banner" class="w-100">
          </figure>

        </div>
      </section>





      <!-- 
        - #SERVICE
      -->

      <section class="section service" id="form" aria-label="form">
        <div class="container">

          <h2 class="h2 section-title">Jenis Formulir</h2>

          <p class="section-text">
            Anda dapat membuat Surat Gugatan dan Surat Permohonan secara mandiri hanya dengan 
            mengisi formulir klasifikasi perkara yang anda pilih.
          </p>

          <ul class="grid-list">

            <li>
              <div class="service-card">

                <div class="card-icon" style="background-color: #13c4a1">
                  <ion-icon name="chatbox"></ion-icon>
                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">Cerai Gugat</a>
                </h3>

                <p class="card-text">
                  UNDER CONSTRUCTION
                </p>

              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon" style="background-color: #6610f2">
                  <ion-icon name="desktop"></ion-icon>
                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">Cerai Talak</a>
                </h3>

                <p class="card-text">
                  UNDER CONSTRUCTION
                </p>

              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon" style="background-color: #ffb700">
                  <ion-icon name="bulb"></ion-icon>
                </div>

                <h3 class="h3">
                  <a href="<?php echo base_url('isbat') ?>" class="card-title">Isbat Nikah</a>
                </h3>

                <p class="card-text">
                    Pengesahan pernikahan seorang laki-laki dan perempuan muslim yang telah dilaksanakan dan 
                    memenuhi syarat rukun perkawinan secara agama namun tidak dicatatkan di Kantor Urusan Agama (KUA).
                </p>

              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon" style="background-color: #fc3549">
                  <ion-icon name="phone-portrait"></ion-icon>
                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">Dispensasi Nikah</a>
                </h3>

                <p class="card-text">
                  UNDER CONSTRUCTION
                </p>

              </div>
            </li>

          </ul>

        </div>
      </section>


      <!-- 
        - #ABOUT
      -->

      <section class="section about" id="about" aria-label="about">
        <div class="container">

          <div class="about-banner img-holder" style="--width: 720; --height: 960;">
            <img src="./assets/images/about-banner.jpg" width="720" height="960" loading="lazy" alt="about banner"
              class="img-cover">

            <button class="play-btn" aria-label="Play video">
              <ion-icon name="play" aria-hidden="true"></ion-icon>
            </button>
          </div>

          <div class="about-content">

            <h2 class="h2 section-title">About Us</h2>

            <p class="section-text">
              Lorem ipsum dolor sit amet, con se ctetur adipiscing elit. In sagittis eg esta ante, sed viverra nunc
              tinci dunt nec
              elei fend et tiram.
            </p>

            <h3 class="h3">Who We Are</h3>

            <p class="section-text">
              Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
              rem aperiam,
              eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
            </p>

            <h3 class="h3">Our Success</h3>

            <ul class="about-list">

              <li class="about-item">
                <ion-icon name="checkmark-circle" aria-hidden="true"></ion-icon>

                <p class="section-text">
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                </p>
              </li>

              <li class="about-item">
                <ion-icon name="checkmark-circle" aria-hidden="true"></ion-icon>

                <p class="section-text">
                  It is a long established fact that a reader will be distracted by the readable content of a page when
                  looking at its
                  layout.
                </p>
              </li>

              <li class="about-item">
                <ion-icon name="checkmark-circle" aria-hidden="true"></ion-icon>

                <p class="section-text">
                  Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                  classical Latin
                  literature.
                </p>
              </li>

            </ul>

            <h3 class="h3">Our Mission</h3>

            <p class="section-text">
              At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti
              atque corrupti
              quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in.
            </p>

          </div>

        </div>
      </section>


      <!-- 
        - #CONTACT
      -->

      <section class="section contact" id="contact" aria-label="contact">
        <div class="container">

          <ul class="contact-list">

            <li class="contact-item">
              <div class="contact-card">

                <div class="card-icon">
                  <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>
                </div>

                <div class="card-content">

                  <h3 class="h3 card-title">Mail Here</h3>

                  <a href="mailto:mahkamahsyariyahsukamakmue@gmail.com" class="card-link">Email Here</a>

                </div>

              </div>
            </li>

            <li class="contact-item">
              <div class="contact-card">

                <div class="card-icon">
                  <ion-icon name="map-outline" aria-hidden="true"></ion-icon>
                </div>

                <div class="card-content">

                  <h3 class="h3 card-title">Visit Here</h3>

                  <address class="card-address">
                    <a href="https://maps.app.goo.gl/4zB9WT5nUe1BcBFo6" class="card-link" target="_blank">Visit Here</a>
                  </address>

                </div>

              </div>
            </li>

            <li class="contact-item">
              <div class="contact-card">

                <div class="card-icon">
                  <ion-icon name="headset-outline" aria-hidden="true"></ion-icon>
                </div>

                <div class="card-content">

                  <h3 class="h3 card-title">Call Here</h3>

                  <a href="https://api.whatsapp.com/send?phone=6285372682384" class="card-link">Contact Via WhatsApp</a>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>

    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <footer class="footer">
    <div class="container">

      <p class="copyright">
        Template By : &copy; 2024 All Rights Reserved by <a href="#" class="copyright-link">Mahkamah Syar'iyah Suka Makmue</a>
        Template By : <a href="https://github.com/codewithsadee" class="copyright-link" target="_blank">codewithsadee</a> & <a href="https://adminlte.io/" class="copyright-link" target="_blank">AdminLTE.io</a>
      </p>

    </div>
  </footer>





  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" aria-label="back to top" data-back-top-btn class="back-top-btn">
    <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
  </a>