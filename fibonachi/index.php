<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta http-equiv="Cache-Control" content="no-cache">
</head>
<body>
  <h1>Фибоначчи, 64 числа</h1>
  <br>
<?php
  function fibonachchi($n)
  {
    for ($i = 1;$i <= $n; $i++)
    {
      if($i < 3)
      {
        $cache[$i] = 1;
      }
      else
      {
        $cache[$i] = $cache[$i - 1] + $cache[$i - 2];
      }
    }
    return $cache;
  }
  $cache = fibonachchi(64);
  foreach ($cache as $key => $value) 
  {
    echo $key.") ".$value."<br>";
  }
?>
</body>
</body>
</html>
