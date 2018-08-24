<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Cabin+Sketch|Special+Elite" rel="stylesheet">
  <link rel="stylesheet" href="css/style_undead.css">
  <title>BDD JDR</title>
</head>

<body>

  <?php
  require "logs.php";
    ?>

  <div class="container">

    <header>
      <nav class="nested">
        <img src="img/logo_undeads.png" alt="img/logo_undeads.png">
        <h1><a href="index.php">Bestiaire</a></h1>

        <ul class="ulFlex">
          <a href="index.php"><li>Accueil</li></a>
          <a href="#"><li>Création de compte</li></a>
          <a href="#"><li>Ajouter une catégorie <i class="fas fa-user-lock"></i></li></a>
          <a href="#"><li>Ajouter une carte <i class="fas fa-user-lock"></i></li></a>
          <li class="rollContainer">
            Catégories
            <ul class="roll">
              <a href="beasts.php"><li>Bêtes & Animaux</li></a>
              <a href="undeads.php"><li>Morts-Vivants et Revenants</li></a>
            </ul>
          </li>
        </ul>

        <aside class="account">
          <img src="img/avatar.jpeg" alt="avatar">
          <h3>Your Username</h3>
          <h3>Rank: ???</h3>
        </aside>
      </nav>
    </header>

    <main class="nested">

        <?php ?>
        <a class="cardContainer" href="#">
          <article class="card nested">
            <img src="<?php  ?>" alt="img/logo.png">
            <h3><?php  ?></h3>
            <h3><?php  ?></h3>
            <h3><?php  ?></h3>
            <h3><?php  ?></h3>
            <h3><?php  ?></h3>
            <div class="text">
              <p>
                <?php  ?>
              </p>
            </div>
            <h4>Cliquez sur l'article pour voir plus...</h4>
            <h4 class="date"><?php  ?></h4>
            <!-- echo date("d/m/y", strtotime($value['creation_date'])); -->
          </article>
        </a>
        <?php ?>
    </main>

    <?php require "footer.php" ?>
  </div>

  <script src="node_modules/jquery/dist/jquery.min.js" charset="utf-8"></script>
  <script src="js/script.js" charset="utf-8"></script>
</body>

</html>
