<?php
  include("connection.php");
  if(isset($_POST['confirmation'])){
    
    $email = $_POST['exampleFormControlInput1'];
    $pass = $_POST['inputPassword5'];

    $sql = "select * from information where email = '$email' and pass = '$pass'";
    $result = mysqli_query($conn ,$sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    $name = $row['name'];
    if($count ==1)
    {

      header("Location:home.html");
      
    }
    else{
      echo '<script>
        window.location.href = "Log.php"
        alert("Login failed. Invalid email / password")
        </script>';
    }

  }
  
?>