<html>

<head>
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  <title>My Personal Page</title>
  <link rel="stylesheet" href="index.css">
</head>

<body>
  <div class="content">
    <?php
      echo '<h1>Ivan Ivanov</h1>';

      $a = 4;
      $b = 4;
      $sum_result = $a + $b;
      echo $a . ' + ' . $b . ' = ' . $sum_result;
      echo '<br>';

      echo "4 + 4 = " . (4 + 4);
      echo '<br>';

      echo "4 + 4 = 8";
    ?>
  </div>
</body>

</html>
