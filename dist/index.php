<?php
  include 'inc/header_common.php';
?>

<body>
  <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

  <!-- Add your site or application content here -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light" id="tornasu">
    <a class="navbar-brand" href="index.php"><img src=bpl_italia_logo.png width="55" height="55" class="img-thumbnail"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="blog.php">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="chisiamo.php">Chi siamo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="faq.php">Faq</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Inizio Slider -->

  <section class="hero mb-5">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <article>
            <h2 class="text-white text-center">
              Video di presentazione
            </h2>
          </article>
        </div>
      </div>
    </div>

    <!-- Inizio Frase in sovraimpressione -->

    <div class="c-frase">
      <div class=" container-fluid">
        <div class="row">
          <div class="col-12">
            <h1 class="text-center">Costruiamo una generazione più felice, motivata, onesta e pronta per il mondo reale</h1>
          </div>
        </div>
      </div>
    </div>

  </section>

  <!-- Inizio Come lo facciamo? -->

  <?php
    include 'inc/index/cards.php';
  ?>

  <!-- Inizio Il Nostro Staff -->

  <div class="container">
    <hr class="spacer py-1 py-md-4" />
    <div class="row">
      <img class="col-md-7" src="staff.png" alt="Immagine Il nostro staff">
      <div class="col-md-5">
        <div class="ventipx">
          <h2 class="title">Il nostro Staff</h2>
          <p>Giovani, motivati e con un obiettivo: istruire ed educare le nuove generazione nel rispetto della diversità e nel coltivare la fiducia in sè stessi.
          Come disse Dannis Littky, co-fondatore di Big Picture Learning:
          "Gli studenti hanno bisogno di sentire che la scuola è un posto dove
          la loro forza e le loro energie sono promosse ed elogiate, dove loro
          sono considerati come esseri umani [….]
          Hanno bisogno che la loro scuola e - la loro società - li veda come
          risorse e non come prosciugamento di risorse."
          </p>
        </div>
      </div>
    </div>
    <hr class="spacer py-1 py-md-4" />
  </div>

  <!-- Inizio "Evita di contattarci se..." -->

  <section class="container-fluid backgroundgradient">
    <section class="container text-center">
      <hr class="spacer py-1 py-md-4" />
        <h2>Evita di contattarci se</h2>
        <div class="row">
          <div class="col-md-4">
            <i class="material-icons" style="color:#ffffff">close</i>
            <h4 style="padding-bottom: 25px">Cerchi un diplomificio</h4>
            <h6>Questa è una vera scuola!</h6>
            <h6>Non si tratta del classico istituto che ti regala il diploma</h6>
          </div>
          <div class="col-md-4">
            <img src="stop.svg" height="100%" width="50%" />
          </div>
          <div class="col-md-4">
            <i class="material-icons" style="color:#ffffff">close</i>
            <h4 style="padding-bottom: 25px">Cerchi lavoro</h4>
            <h6>Lo staff è al completo</h6>
            <h6>Il tempo è denaro:</h6>
            <h6>evitiamo di perdere tempo entrambi</h6>
            <h6>Quando si libererà un posto lo scriveremo qui</h6>
          </div>
        </div>
      <hr class="spacer py-1 py-md-4" />
    </section>
  </section>

  <!-- Inizio "Sei un genitore?" -->

  <section class="container-fluid text-center">
    <hr class="spacer py-1 py-md-4" />
      <h2 class="title">Sei un genitore?</h2>
      <p>Puoi trovare un po’ di risposte qui</p>

      <a type="button" class="btn btn-danger" href="faq.php">
        <h4>Si, sono un genitore</h4>
      </a>
    <hr class="spacer py-1 py-md-4" />
  </section>

  <!-- Footer -->

  <?php
    include 'inc/tornasu.php';
    include 'inc/footer.php';
    include 'inc/footer_common.php';
  ?>
