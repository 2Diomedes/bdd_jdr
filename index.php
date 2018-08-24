<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Cabin+Sketch|Special+Elite" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <title>BDD JDR</title>
</head>

<body>

  <?php
  require "logs.php";
  $bdd = new PDO('mysql:host=localhost;dbname=Bestiaire', $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

  $everything = $bdd->query("SELECT * FROM everything ORDER BY creation_date DESC")->fetchAll();
    ?>

  <div class="container">

    <?php require "head.php" ?>

    <main class="nested">

        <?php foreach ($everything as $value):?>
        <a class="cardContainer" href="#">
          <article class="card nested">
            <img src="<?php echo $value['thumb']; ?>" alt="img/logo.png">
            <h3><?php echo $value['race']; ?></h3>
            <h3><?php echo $value['height']; ?></h3>
            <h3><?php echo $value['weight']; ?></h3>
            <h3><?php echo $value['longevity']; ?></h3>
            <h3><?php echo $value['diet']; ?></h3>
            <div class="text">
              <p>
                <?php echo $value['description']; ?>
              </p>
            </div>
            <h4>Cliquez sur l'article pour voir plus...</h4>
            <h4 class="date"><?php echo date("d/m/y", strtotime($value['creation_date'])); ?></h4>
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
