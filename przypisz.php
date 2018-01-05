<?php
include "db.php";
include "functions.php";

if(isset($_POST['submit']))
{
 przypiszUser();
}
?>

<!DOCTYPE html>
<html lang=pl>
<head>
</head>
<body>
<a href="index.php">Main - Spis</a>

  <h1>Przypisz Pokój/Zmień Dane</h1>
  <div>Wybierz Id uzytkownika do zmodyfikowania</div>
  <form action="przypisz.php" method="post">
    <select name="id" id="">
      <?php
        showIdUsers();
       ?>
    </select>
    <input type="text" name="imie">
    <input type="password" name="pass">
    <select name="pok" id="">
      <?php
        showIdRooms();
       ?>
    </select>
    <input type="submit" name="submit" value="update">
  </form>


</body>
</html>
