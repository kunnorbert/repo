<?php
  session_start();
?>

<?php
  echo $_POST["firstname"] . "<br>";
  echo $_POST["lastname"] . "<br>";
  echo $_POST["email"] . "<br>";
  echo $_POST["specialization"] . "<br>";
  echo $_POST["startdate"] . "<br>";
  $jelszo=$_POST["password"];
  echo $jelszo . "<br>";
  echo sha1($jelszo) . "<br>";
  echo $_POST["confirm-password"] . "<br>";

  $user = 'root';
  $pass = '';
  $db = 'szakdolgozat';

  $db = new mysqli('localhost' , $user , $pass , $db) or die("Unable to connect!");
  echo "Great work!";

  $lastname = $_POST["lastname"];
  $firstname = $_POST["firstname"];
  $email = $_POST["email"];
  $specialization = $_POST["specialization"];
  $startdate = $_POST["startdate"];
  $nrmatricol = $_POST["nrmatricol"];
  $password = sha1($_POST["password"]);

  if ($_POST["password"] === $_POST["confirm-password"]) {
     $sql = "INSERT INTO Diak(Csaladnev,Keresztnev,IratkozasiEv,Email,Szakirany,NrMatricol,Jelszo) VALUES ('$lastname' , '$firstname' , $startdate, '$email' , '$specialization'  , '$nrmatricol' , '$password')";
     if($db->query($sql) === TRUE){
       echo "New record created successfully!";
       $msg = "Koszonjuk $firstname hogy regisztralt a platformunkon!";
       mail($email,"Regisztracio",$msg);
     }
     else{
       echo "Error: " . $sql . "<br>" . $db->error;
     }
  }
  else {
    echo "A Jelszó megerősítés nem eggyezik meg a beírt jelszóval!";
  }

  $db->close();

  // $query = "SELECT NrMatricol FROM diak WHERE NrMatricol = '".$nrmatricol."'";
  //
  // $result = $db->query($query);
  //
  // if (mysql_num_rows($result) > 0)
  // {
  //    /* Our query returned some rows,
  //        which means the email address
  //        is in the db */
  //    echo $nrmatricol." is already in our database";
  // }

  // $sql1 = "SELECT NrMatricol FROM diak WHERE NrMatricol = $nrmatricol";
  //
  // $result = $db->query($db,$sql1);
  //
  // if ($result > 0) {
  //     echo("<p>Error: Your email is already in our database.</p>");
  //     exit;
  // }

  // if ($db->query$sql)) {
  //     echo("<p>Thank you for joining the eClub!</p>");
  // } else {
  //     echo("<p>Error joining the eClub: " . mysql_error() . "</p>");
  // }

  //
  //$result = mysql_query('SELECT COUNT(*) FROM `diak` WHERE `NrMatricol` = '.$nrmatricol.' ');
  // if (!$result) {
  //     die(mysql_error());
  // }
  // if (mysql_result($result, 0, 0) > 0) {
  //     $_SESSION["nrmatricol"] = $nrmatricol;
  //     echo "Match found!";
  // } else {
  //     echo "No such data!";
  // }

  #echo $sql;

  #ellenorizni ha a jelszot ketszer adta le helyesen
  #tovabbfejlesztjuk az adatbazist kesobb
  #megnezzuk ha letezik az adatbazisban egy megadott felhaszanlo, es az adatait taroljuk a session tombbe


?>
