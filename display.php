<?php
  
  include("connection.php");
  if(isset($_POST['confirmation'])){
    

    $pass = $_POST['inputPassword5'];


  $sql = "SELECT name, email, gender FROM information WHERE pass = '$pass'";

  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

  $uname = $row["name"];
  $uemail = $row['email'];
  $ugen = $row['gender'];

  echo '<script>
          document.GetElementById("name").innerText='$uname';
          document.GetElementById("email").innerText='$uemail';
          document.GetElementById("gender").innerText='$ugen';
        </script>';
  }


?>