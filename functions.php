<?php
include "db.php";

function showAllUsers() {
    global $connection;
    $query = "SELECT * FROM users";
    $wynik = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($wynik)) {
      $lo = $row;
      ?>
          <pre><?php print_r($lo); ?></pre>
      <?php
    }
}

function showIdUsers() {
    global $connection;
    $query = "SELECT * FROM users";
    $wynik = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($wynik)) {
      $id = $row['id'];
      echo "<option value='$id'>$id</option>";
    }
}

function showIdRooms() {
    global $connection;
    $query = "SELECT * FROM pokoje";
    $wynik = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($wynik)) {
      $id = $row['id'];
      $rn = $row['pokoj'];
      echo "<option value='$rn'>$rn</option>";
    }
}

function newUser() {
  if(isset($_POST['submit']))
  {
    global $connection;
    $imie = $_POST['imie'];
    $pass = $_POST['pass'];
    $pok = $_POST['pok'];

    if (!$connection) {
      die ("Brak połączenia");
    };

    $query = "INSERT INTO users(name,pass,pok) VALUES('$imie', '$pass', '$pok')";

    if ($imie && $pass) {
      mysqli_query($connection, $query);
      echo '<script type="text/javascript">alert("Użytkownik '. $imie .' utworzony.");</script>';
    } else {
      echo '<script type="text/javascript">alert("Brak hasła lub użytkownika");</script>';
      die ();
    };
  }
}

function przypiszUser() {
  if(isset($_POST['submit'])){
    global $connection;
    $imie = $_POST['imie'];
    $pass = $_POST['pass'];
    $pok = $_POST['pok'];
    $id = $_POST['id'];

    $upp = "UPDATE users SET name = '$imie', pass='$pass', pok='$pok' WHERE id = $id";
    $uppAc = mysqli_query($connection,$upp);

    //sprawdzanie błedów
    if(!$uppAc)
    {
      die ("Failed" . mysqli_error($connection));
    }
  }
}
