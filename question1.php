<html>
  <head>
    <title>Question 1</title>
  </head>
  <body>
    <?php

      // first for-loop
      for ($i = 1; $i < 6; $i++) {
        for ($j = 1; $j <= $i; $j++) {
          echo '*';
        }
        echo '<br>';
      }
      
      // second for-loop
      for ($i = 1; $i < 6; $i++) {
        for ($j = 1; $j <= 6- $i; $j++) {
          echo '*';
        }
        echo '<br>';

      }
    ?>
  </body>
</html>