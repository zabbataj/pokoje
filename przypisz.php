<?php
include "db.php";
include "functions.php";
include "includes\header.php";
include "includes\menu.php";

przypiszUser();
?>

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

<?php include "includes/footer.php";?>
