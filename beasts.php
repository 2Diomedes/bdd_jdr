<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

  <link href="https://fonts.googleapis.com/css?family=Cabin+Sketch|Special+Elite" rel="stylesheet">

  <link rel="stylesheet" href="css/style_beast.css">
  <title>BDD JDR</title>
</head>

<body>

  <?php
  require "logs.php";
  $bdd = new PDO('mysql:host=localhost;dbname=Bestiaire', $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

  $beast = $bdd->query("SELECT * FROM beast")->fetchAll();
    ?>

  <div class="container">

    <header>
      <nav class="nested">
        <img src="img/logo_beasts.png" alt="img/logo_beasts.png">
        <h1><a href="index.php">Bestiaire</a></h1>

        <ul class="ulFlex">
          <a href="index.php"><li>Acceuil</li></a>
          <a href="#"><li>Création de compte</li></a>
          <li class="rollContainer">
            Catégories
            <ul class="roll">
              <a href="beasts.php"><li>Bêtes & Animaux</li></a>
            </ul>
          </li>
          <a href="#"><li>Autre li</li></a>
        </ul>

        <aside class="account">
          <img src="https://via.placeholder.com/150x150" alt="avatar">
          <h3>Your Username</h3>
          <h3>Rank: ???</h3>
        </aside>
      </nav>
    </header>

    <main class="nested">


        <?php foreach ($beast as $value):?>
      <a class="cardContainer" href="#">
        <article class="card">
          <img src="<?php echo $value['thumb']; ?>" alt="img/logo.png">
          <h3>Race: <?php echo $value['race']; ?></h3>
          <h3>Taille: <?php echo $value['height']; ?></h3>
          <h3>Poids: <?php echo $value['weight']; ?></h3>
          <h3>Durée de vie: <?php echo $value['longevity']; ?></h3>
          <h3>Régime alimentaire: <?php echo $value['diet']; ?></h3>
          <div class="text">
            <p>
              Decription: <?php echo $value['description']; ?>
            </p>
          </div>
          <h4>Cliquez sur l'article pour lire plus...</h4>
          <h4>Date de sortie: <?php echo date("d/m/y", strtotime($value['date'])); ?></h4>
        </article>
      </a>
        <?php endforeach;?>


    </main>

    <?php require "footer.php" ?>
  </div>

  <script src="node_modules/jquery/dist/jquery.min.js" charset="utf-8"></script>
  <script src="js/script.js" charset="utf-8"></script>
</body>

</html>
