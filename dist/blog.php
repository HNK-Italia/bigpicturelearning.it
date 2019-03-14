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
        <li class="nav-item active">
          <a class="nav-link" href="blog.php">Blog <span class="sr-only">(current)</span></a>
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

  <!-- Inizio Titolo -->

  <section class="hero-blog mb-5" style="background: url('blog.jpg');background-size: cover;">

  <!-- Inizio frase in sovraimpressione -->

    <div class="c-frase">
      <div class=" container-fluid">
        <div class="row">
          <div class="col-12">
            <h1 class="text-center">Cosa abbiamo da raccontarti?</h1>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Inizio dei post -->

  <section class="container ventipx">
    <div class="row">
      <div class="col-4">
        <img class="img-fluid" src="https://picsum.photos/666/444">
      </div>
      <div class="col-8">
        <div class="text-center">
          <h2 class="title">Title post</h2>
        </div>
      </div>
    </div>
  </section>

  <!-- Nuovo post del Blog -->

  <section class="container ventipx">
    <div class="row">
      <div class="col-4">
        <img class="img-fluid" src="https://picsum.photos/666/444">
      </div>
      <div class="col-8">
        <div class="text-center">
          <h2 class="title">Title post</h2>
        </div>
      </div>
    </div>
  </section>

    <!-- Nuovo post del Blog -->

    <section class="container ventipx">
      <div class="row">
        <div class="col-4">
          <img class="img-fluid" src="https://picsum.photos/666/444">
        </div>
        <div class="col-8">
          <div class="text-center">
            <h2 class="title">Title post</h2>
          </div>
        </div>
      </div>
    </section>

  <!-- Inizio delle cards -->

  <section class="container">
  <div class="card-deck container">
    <div class="card text-center bpl-card">
      <div class="card-img-top-blog img-background-little" style="background-image: url('https://picsum.photos/666/444');" alt="Card image cap"></div>
      <div class="card-body">
        <h5 class="card-title">Vecchio post</h5>
        <a href="#" class="btn btn-link">Continua a leggere</a>
      </div>
    </div>

      <!-- Fine di una Cards e inizio di un'altra -->

      <div class="card text-center bpl-card">
        <div class="card-img-top-blog img-background-little" style="background-image: url('https://picsum.photos/666/444');" alt="Card image cap"></div>
        <div class="card-body">
          <h5 class="card-title">Vecchio post</h5>
          <a href="#" class="btn btn-link">Continua a leggere</a>
        </div>
      </div>

      <!-- Fine di una Cards e inizio di un'altra -->

      <div class="card text-center bpl-card">
        <div class="card-img-top-blog img-background-little" style="background-image: url('https://picsum.photos/666/444');" alt="Card image cap"></div>
        <div class="card-body">
          <h5 class="card-title">Vecchio post</h5>
          <a href="#" class="btn btn-link">Continua a leggere</a>
        </div>
      </div>
  </div>
  </section>

  <hr class="spacer py-1 py-md-4" />

  <!-- Footer -->

  <?php
    include 'inc/tornasu.php';
    include 'inc/footer.php';
    include 'inc/footer_common.php';
  ?>
