<?php
  include("connection.php");
  include("display.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">

  
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<title>Savoury secrerts</title>
</head>
<body style="background-image:url('Profile.jpg');background-repeat:no-repeat">
  <nav class="navbar navbar-expand-lg bg-warning-subtle">
    <div class="container-fluid">
      <a class="navbar-brand" href="home.html" style="font-size: 20px;color:rgb(201, 134, 0)">Savoury Secrets</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home.html" style="color:rgb(201, 134, 0)">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html" style="color:rgb(201, 134, 0)">Contact Us</a>
          </li>
          
          
        </ul>
      </div>
    </div>
  </nav>
  <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="C:\xampp\htdocs\project\home.html" style="color:rgb(201, 134, 0)">Main</a></li>
        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
      </ol>
    </nav>
  


  <br>
  <br>
  <br>

  <div class="container text-center" style="border:2px solid black" >
  <div class="row" style="height:490px">
     
    <div class="col-8 bg-light p-2 text-dark bg-opacity-75">

    <h4 class="text-center">About you...</h4>
      <br>
      <br>
      
     
    <div class="container">
      <div class="row align-items-start">
        <div class="col bg-light p-2 text-dark bg-opacity-75" style="height:65px">
        
          <h5 style="font-weight:bold;text-align:left" id ="NAME" ></h2>
        </div>
      </div>
    </div>

    <br>
      <br>

    <div class="container">
      <div class="row align-items-start">
        <div class="col bg-light p-2 text-dark bg-opacity-75" style="height:65px">
     
        <h5 style="font-weight:bold;text-align:left" id="email" ></h2>
        </div>
      </div>
    </div>

    <br>
      <br>

    <div class="container">
      <div class="row align-items-start">
        <div class="col bg-light p-2 text-dark bg-opacity-75" style="height:65px">
        
        <h5 style="font-weight:bold;text-align:left" id="gender" ></h2>
        </div>
      </div>
    </div>




    </div>
    <div class="col-4 bg-light p-2 text-dark bg-opacity-50" style="border:2px solid black">
    <script>
          function a(){
            alert("Want to change the profile pic?You'll have to be a premium member for that");
          }
        </script>
    <svg onclick="a()" xmlns="http://www.w3.org/2000/svg" width="439" height="439" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16" class="rounded">
          <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
        </svg>
        
    </div>
   
  </div>
</div>


<br>
<br>
<br>


<div class="container-fluid bg-warning sticky-bottom" style="height:75px">
      <div class="col" style="text-align: center;height:50px;font-size: 17px;color:rgb(0, 0, 0)"></br>Mail us your recipes at abc@gmail.com</div>
      
    
    </div>


<script src="https://kit.fontawesome.com/ee0769731c.js" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>