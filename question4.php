<html>
  <head>
    <title>Question 4</title>
  </head>
  <body>
    <?php

      $theStr = "Hello there my name is Kevin";
      $count = 0;

      // echo str_replace(" ","%", $theStr);
      // echo "<br>";

      for ($i = 0; $i < strlen($theStr); $i++) {
        if ($theStr[$i] === ' ') {
          $count++;
          $theStr[$i] = '%';
        }
      }
      echo $theStr . '<br>';
      echo $count;
    ?>
  </body>
</html>