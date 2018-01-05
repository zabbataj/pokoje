<?php
include "db.php";
include "functions.php";
include "includes\header.php";
include "includes\menu.php";

newUser();
?>

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

<?php include "includes/footer.php";?>
