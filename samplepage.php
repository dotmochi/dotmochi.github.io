<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>画像をある分だけ表示する</title>
  </head>
  <body>
    <?php
      $count = 0;
      $files = count(glob("/imgsample/img200414/*.jpg"));
      while ($count <= $files) {
        echo "<img src='/imgsample/img200414/\$count\.jpg'>";
        echo "<br>";
        $count++ ;
      }
    ?>
  </body>
</html>
