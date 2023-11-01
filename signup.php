<?php
  include("connnection2.php");
  if(isset($_POST['confirmation'])){
    $username = mysqli_real_escape_string($conn,$_POST['exampleFormControlInput2']);
    $email = mysqli_real_escape_string($conn,$_POST['exampleFormControlInput1']);
    $password = mysqli_real_escape_string($conn,$_POST['inputPassword5']);
    $gender = mysqli_real_escape_string($conn,$_POST['gender']);

    $sql = "select * from information where name='$username'";
    $result = mysqli_query($conn, $sql);
    $count_user = mysqli_num_rows($result);

    $sql = "select * from information where email='$email'";
    $result = mysqli_query($conn, $sql);
    $count_email = mysqli_num_rows($result);

    if($count_user==0 & $count_email==0){
      
      $sql = "INSERT INTO information(name, email, pass, gender) VALUES('$username', '$email', '$password','$gender')";
      $result = mysqli_query($conn, $sql);
      if($result){
        header("Location: dashboard.php");
      }
    }
    else{
      if($count_user>0){
        echo '<script>
          window.location.href="Reg.php";
          alert("username already exists. Please try logging in.");
        </script>';
      }
      if($count_email>0){
        echo '<script>
          window.location.href="Reg.php";
          alert("email already exists. Please try logging in.");
        </script>';
      }
    }


  }

?>