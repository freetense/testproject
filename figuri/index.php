
<?php
  include("include/classInclude.php");
  $file = 'include/Objects.php';
  $current = file_get_contents($file);
  $figuraOb[0] = "Pryamougolnik";
  $figuraOb[1] = "Krug";
  $figuraOb[2] = "Piramida";
  shuffle($figuraOb);
  $current = '<?php
  $figura[0] = new '.$figuraOb[0].';
  $figura[1] = new '.$figuraOb[1].';
  $figura[2] = new '.$figuraOb[2].';
  ?>';
  file_put_contents($file, $current);
  include("include/Objects.php");
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta http-equiv="Cache-Control" content="no-cache">
</head>
<body>
  <h1>Вычисление пдощадей:</h1>
<?php
  foreach ($figura as $key => $value) 
  {
    $figuraSort[$key] = $value->square();
  }
  rsort($figuraSort);
  foreach ($figuraSort as $key => $value) 
  {
    echo $value."<br>";
  }
?>
</body>
</body>
</html>
