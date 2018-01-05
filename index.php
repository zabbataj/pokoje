<?php
include "db.php";
include "functions.php";
?>

<!DOCTYPE html>
<html lang=pl>
<head>
  <title>Main - Wykaz przydziału</title>
</head>
<body>

<a href="przypisz.php">Przypisz</a>
<a href="new_user.php">Nowy</a>

  <h1>Main - Wykaz przydziału</h1>

<?php showAllUsers(); ?>

</body>
</html>
