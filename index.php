
<html>

<head>
  <meta charset="utf-8">
  <title>Techbecca's Portfolio</title>
  <link rel="stylesheet" type="text/css" href="resources/css/style.css" />
  <!-- Old fonts
  <link href="https://fonts.googleapis.com/css?family=Cardo" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
  --->
  <link href="http://fonts.googleapis.com/css?family=Dancing+Script:700|EB+Garamond" rel="stylesheet" type="text/css" />
</head>

<body>
  <div class="header">
    <br/>
    <br/>
    <h1>Techbecca's Portfolio</h1>
    <h3>View my shit. Hopefully it's awesome.</h3>
    <br/>
  </div>
  <div class="albums">
    <?php
      $path = "./resources/img/albums";
      $iterator = new FilesystemIterator(dirname($path));
      $entries = array();
    ?>
    <h2>Render <?= $path;?> Here</h2>
    <?php
      foreach ($iterator as $fileinfo) : ?>
        <h3><?= $fileinfo->getFilename() ?></h3>
        <?php $entries[] =  $fileinfo->getFilename(); ?>
    <?php endforeach ?>
    <?php
      var_dump($entries);
      echo "The end";
     ?>
   </div>
  <div class="projects">
    <ul>
      <li> <a href="#">link 1</a> </li>
      <li> <a href="#">link 2</a> </li>
      <li> <a href="#">link 3</a> </li>
      <li> <a href="#">link 4</a> </li>
    </ul>
  </div>
</body>

</html>
