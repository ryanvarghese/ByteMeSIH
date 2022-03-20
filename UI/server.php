<?php

  if(isset($_POST['submit'])){
    //connect to db
      $server = "localhost";
      $user = "root";
      $pass = "";
      $db = "sih";

      $conn = mysqli_connect($server, $user, $pass, $db) or die("could not connect to database");

      $name = $_POST['name'];
      $phone= $_POST['phone'];
      $email = $_POST['email'];

      $fileNamePhoto = $_FILES['filephoto']['name'];
      $tmpNamePhoto = $_FILES['filephoto']['tmp_name'];
      $fileNameSign = $_FILES['filesign']['name'];
      $tmpNameSign = $_FILES['filesign']['tmp_name'];

      $folderPhoto = 'photo/';
      $folderSign = 'sign/';

      move_uploaded_file($tmpNamePhoto, $folderPhoto.$fileNamePhoto);
      move_uploaded_file($tmpNameSign, $folderSign.$fileNameSign);

      $sql = "INSERT INTO `psc`(`id`, `name`, `email`, `phone`, `photo`, `sign`) VALUES (NULL, '$name', '$email', '$phone', '$fileNamePhoto', '$fileNameSign')";

      $query = mysqli_query($conn,$sql);

      if($query){
        echo "<br>submited";

      }
  }
?>
