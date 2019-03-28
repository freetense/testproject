<?php
  include("include/Db.php");
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta http-equiv="Cache-Control" content="no-cache">
</head>
<body>
  <h1>Книг меньше 7 шт. без учета соавторства:</h1>
<?php
  $sql = 'SELECT name, COUNT(*) AS `c` FROM author INNER JOIN books ON author.id_author = books.autors_id GROUP BY name  HAVING c < 7';
  $result = Db::run($sql);
  foreach ($result as $row) 
  {
    echo $row["name"].": количество книг ".$row["c"]." шт.<br>";
  }
?>
  <h1>Книг меньше 7 шт. с учетом соавторства:</h1>
<?php
  $sql = 'SELECT name, COUNT(*) AS `c` FROM author INNER JOIN books ON author.id_author = books.autors_id OR author.id_author = books.soator GROUP BY name  HAVING c < 7';
  $result = Db::run($sql);
  foreach ($result as $row) 
  {
    echo $row["name"].": количество книг ".$row["c"]." шт.<br>";
  }
?>
</body>
</body>
</html>
