<?php
  include 'inc/header_common.php';
?>

<body>
  <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

  <!-- Add your site or application content here -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light" id="tornasu">
    <a class="navbar-brand" href="index.php"><img src="BPL logo.jpg" width="55" height="55" class="img-thumbnail"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="blog.php">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="chisiamo.php">Chi siamo <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="faq.php">Faq</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Inizio Titolo -->

  <section class="hero-minimo" style="background: url('foto chi siamo.jpg');background-size: cover; background-position: center center;">

  <!-- Inizio frase in sovraimpressione -->

    <div class="c-frase">
      <div class=" container-fluid">
        <div class="row">
          <div class="col-12">
            <h1 class="text-center">Su di Noi</h1>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Inizio della foto con testo -->

  <section class="container center">
    <div class="row">
      <div class="col-mx-12 col-md-7 ventipx">
        <div class="text-center">
          <h2 style="color: #1CA554">Il nostro team</h2>
          <p>Giovani, motivati e con un obiettivo: istruire ed educare le nuove
          generazione nel rispetto della diversità e nel coltivare la fiducia in
          sè stessi.
          Come disse Dannis Littky, co-fondatore di Big Picture Learning:
          "Gli studenti hanno bisogno di sentire che la scuola è un posto
          dove la loro forza e le loro energie sono promosse ed elogiate,
          dove loro sono considerati come esseri umani […]
          Hanno bisogno che la loro scuola e - la loro società - li veda come
          risorse e non come prosciugamento di risorse."
          </p>
        </div>
      </div>
      <div class="col-mx-12 col-md-5">
        <img class="img-fluid" src="bpl_italia_logo.png" style="padding: 20px;">
      </div>
    </div>
  </section>

  <!-- Inizio testo -->

  <section class="container">
    <hr class="spacer py-1 py-md-4" />
      <div class="text-center">
        <h2 style="color: #1CA554" >Chi siamo?</h2>
      </div>
    <div class="text-center">
      <p>Giovani, motivati e con un obiettivo: istruire ed educare le nuove generazione nel rispetto della diversità e nel coltivare la fiducia in sè stessi.
        Come disse Dannis Littky, co-fondatore di Big Picture Learning:
        "Gli studenti hanno bisogno di sentire che la scuola è un posto dove la loro forza e le
        loro energie sono promosse ed elogiate, dove loro sono considerati come esseri
        umani […]
        Hanno bisogno che la loro scuola e - la loro società - li veda come risorse e non come
        prosciugamento di risorse."
      </p>
    </div>
    <hr class="spacer py-1 py-md-4" />
  </section>

  <hr class="spacer py-1 py-md-4" />

  <!-- Inizio cards insegnanti -->

  <?php
    include 'inc/insegnanti_definitivo.php'
   ?>

  <!-- Inizio Google Maps -->

  <section class="container-fluid backgroundgreen">
  <section class="container text-center ventipx">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2792.931154813043!2d8.05647781583787!3d45.57182303427618!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478620e351890a8b%3A0xc97075872de0b51!2sSellalab+-+Biella!5e0!3m2!1sit!2sit!4v1550844521461" width="100%" height="550px" frameborder="0" style="border: 0" allowfullscreen></iframe>
  </section>
</section>

  <!-- Footer -->

  <?php
    include 'inc/tornasu.php';
    include 'inc/footer.php';
    include 'inc/footer_common.php';
  ?>
