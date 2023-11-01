
<?php
$db_hostname = "127.0.0.1";
$db_username = "root";
$db_password = "";
$db_name = "users";

// Create a connection
$conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);

// Check the connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Check if POST data is set and sanitize inputs
if (isset($_POST['username'], $_POST['email'], $_POST['password'])) {
  $name = mysqli_real_escape_string($conn, $_POST['username']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hash the password

  // Prepare and execute the SQL statement
  $sql = "INSERT INTO information (username, email, PW) VALUES ('$name', '$email', '$password')";
  $result = mysqli_query($conn, $sql);

  if (!$result) {
    echo "Error: " . mysqli_error($conn);
  } else {
    echo "Registration successful";
  }

  mysqli_close($conn);
} else {
  echo "Something's not quite right...";
}
?>

