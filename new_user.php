<?php
include "db.php";
include "functions.php";

if(isset($_POST['submit']))
{
newUser();
};
?>

<!DOCTYPE html>
<html lang=pl>
<head>
</head>
<body>
  <a href="index.php">Main - Spis</a>

  <h1>New User</h1>
  <form action="new_user.php" method="post">
    <input type="text" name="imie">
    <input type="password" name="pass">
    <select name="pok" id="">
      <?php
        showIdRooms();
       ?>
    </select>
    <input type="submit" name="submit" value="submit">
  </form>

</body>
</html>
