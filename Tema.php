<?php
  $user = 'root';
  $pass = '';
  $db = 'szakdolgozat';

  $db = new mysqli('localhost' , $user , $pass , $db) or die("Unable to connect!");

  mysqli_set_charset($db,"utf8");

  $sql='SELECT Cim,Kategoria FROM tema';
  $result=$db->query($sql);
  if($db->query($sql)){
    echo "Select successfull! <br>";
    while($row=mysqli_fetch_array($result)){
      echo "Cim: " . $row['Cim'] . ", ";
      echo "Kategoria: " . $row['Kategoria'] ."<br>";
    }
  }
  else{
    echo "Error: " . $sql . "<br>" . $db->error;
  }

  $sql='SELECT TCsaladnev,TKeresztnev FROM tanar';
  $result=$db->query($sql);
  if($db->query($sql)){
    echo "Select 2 successfull! <br>";
    while($row=mysqli_fetch_array($result)){
      <select>
        <option>$row['TCsaladnev']</option>
      </select>
    }
  }

  //Berakni a tanarokat az adatbazisbol egy dropdown menube


?>
