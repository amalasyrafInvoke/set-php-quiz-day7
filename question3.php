<html>
  <head>
    <title>Question 3</title>
  </head>
  <body>
    <?php

      $sumTotal = 0;

      for ($i = 30; $i <= 50; $i++) {
        if ($i % 2 === 1) {
          $sumTotal += $i;
        }
      }

      echo $sumTotal;
    ?>
  </body>
</html>