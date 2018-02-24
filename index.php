<?php
require('database.php');
initImigration($pdo);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Simple CRUD</title>
  </head>
  <body>
    <a href="create.php">Crete User</a>
    <a href="read.php?show=all">Show All</a>
  </body>
</html>
