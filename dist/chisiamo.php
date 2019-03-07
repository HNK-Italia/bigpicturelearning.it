<?php
  include 'inc/header_common.php';
?>

<body>
  <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

  <!-- Add your site or application content here -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
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

  <section class="hero-minimo mb-5" style="background: url('foto chi siamo.jpg');background-size: cover; background-position: center center;">

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

  <section class="container center ventipx">
    <div class="row">
      <div class="col-8">
        <div class="text-center">
          <h2>Text</h2>
          <p>Now is the winter of our discontent
            Made glorious summer by this sun of York;
            And all the clouds that lour'd upon our house
            In the deep bosom of the ocean buried.
            Now are our brows bound with victorious wreaths;
            Our bruised arms hung up for monuments;
            Our stern alarums changed to merry meetings,
            Our dreadful marches to delightful measures.
            Grim-visaged war hath smooth'd his wrinkled front;
            And now, instead of mounting barded steeds
            To fright the souls of fearful adversaries,
            He capers nimbly in a lady's chamber
            To the lascivious pleasing of a lute.
            But I, that am not shaped for sportive tricks,
            Nor made to court an amorous looking-glass;
            I, that am rudely stamp'd, and want love's majesty
            To strut before a wanton ambling nymph;
            I, that am curtail'd of this fair proportion,
          </p>
        </div>
      </div>
      <div class="col-4">
        <img class="img-fluid" src="bpl_italia_logo.png">
      </div>
    </div>
  </section>

  <!-- Inizio testo -->

  <section class="container-fluid mb-5 backgroundgreen">
    <div class="text-center whitegreen">
      <h2><span>Text</span></h2>
    </div>
    <div class="whitegreen text-center" style="padding-left: 25%; padding-right: 25%">
      <p><span>Now is the winter of our discontent
        Made glorious summer by this sun of York;
        And all the clouds that lour'd upon our house
        In the deep bosom of the ocean buried.
        Now are our brows bound with victorious wreaths;
        Our bruised arms hung up for monuments;
        Our stern alarums changed to merry meetings,
        Our dreadful marches to delightful measures.
        Grim-visaged war hath smooth'd his wrinkled front;
        And now, instead of mounting barded steeds
        To fright the souls of fearful adversaries,
        He capers nimbly in a lady's chamber
        To the lascivious pleasing of a lute.
        But I, that am not shaped for sportive tricks,
        Nor made to court an amorous looking-glass;
        I, that am rudely stamp'd, and want love's majesty
        To strut before a wanton ambling nymph;
        I, that am curtail'd of this fair proportion,
      </span></p>
    </div>
  </section>

  <!-- Inizio Google Maps -->

  <section class="container text-center ventipx">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2792.931154813043!2d8.05647781583787!3d45.57182303427618!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478620e351890a8b%3A0xc97075872de0b51!2sSellalab+-+Biella!5e0!3m2!1sit!2sit!4v1550844521461" width="100%" height="550px" frameborder="0" style="border: 0" allowfullscreen></iframe>
  </section>

  <!-- Inizio cards insegnanti -->

  <section class="container mb-5">
    <div class="center card-deck">
      <div class="card text-center bpl-card">
        <div class="bpl-card-img-top img-background-little" style="background: url('https://picsum.photos/666/444'); background-size: cover; background-position: 50% 50%;" alt="Card image cap"></div>
        <div class="card-body">
          <h5 class="card-title">Nome Cognome</h5>
          <p class="card-text">Professione</p>
          <a href="faq.php" class="btn btn-danger">Social</a>
        </div>
      </div>

      <!-- Fine di una card e Inizio di un'altra -->

      <div class="card text-center bpl-card">
        <div class="bpl-card-img-top img-background-little" style="background: url('https://picsum.photos/666/444'); background-size: cover; background-position: 50% 50%;" alt="Card image cap"></div>
        <div class="card-body">
          <h5 class="card-title">Nome Cognome</h5>
          <p class="card-text">Professione</p>
          <a href="faq.php" class="btn btn-danger">Social</a>
        </div>
      </div>

      <!-- Fine di una card e Inizio di un'altra -->

      <div class="card text-center bpl-card">
        <div class="bpl-card-img-top img-background-little" style="background: url('https://picsum.photos/666/444'); background-size: cover; background-position: 50% 50%;" alt="Card image cap"></div>
        <div class="card-body">
          <h5 class="card-title">Nome Cognome</h5>
          <p class="card-text">Professione</p>
          <a href="faq.php" class="btn btn-danger">Social</a>
        </div>
      </div>

  <!-- Fine di una card e Inizio di un'altra -->

      <div class="card text-center bpl-card">
        <div class="bpl-card-img-top img-background-little" style="background: url('https://picsum.photos/666/444'); background-size: cover; background-position: 50% 50%;" alt="Card image cap"></div>
        <div class="card-body">
          <h5 class="card-title">Nome Cognome</h5>
          <p class="card-text">Professione</p>
          <a href="faq.php" class="btn btn-danger">Social</a>
        </div>
      </div>
  </section>

  <!-- Footer -->

  <?php
    include 'inc/footer.php';
    include 'inc/footer_common.php';
  ?>
