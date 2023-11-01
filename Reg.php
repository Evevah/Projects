
<?php
  include("connnection2.php");
?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">

  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Savoury secrerts</title>
</head>

<body class="bg-warning" style=" background-image:url('Loginpage2.jpg');background-repeat:no-repeat">
  
    
  
 


  <h1 align="center" style="color:white;font-size:85px"><pre>  Savoury Secrets</pre></h1>
  <h1 align="center" style="color:white;font-size:40px">Step into a world of amazing culinary wonders.</h1>


  

 
 
  
  <div class="container text-center">
    <div class="bg-warning p-2 text-dark bg-opacity-50 col-md-6 offset-md-4" style="background-image:var(--bs-gradient);width: 500px;height:500px">
      
      <div class="col" style="height:500px">
        <br>
        <h3 style="color:white;font-size:40px">Sign-Up</h3>

        <form method="POST" action="signup.php" name="form">
      <div class="container text-center">
        <div class="row" style="height:79px">
          <div class="col">
            
          </div>
          <div class="col-8" >
            
            <div>
              <label for="exampleFormControlInput2" class="form-label" style="color:black;font-weight:bold;font-size: 16px;">UserName</label>
              <input type="text" class="form-control" id="exampleFormControlInput2" name="exampleFormControlInput2" placeholder="Username"style="width: 300px" required>
            </div>
            
          </div>
          <div class="col">
            
          </div>
        </div>
      </div>
      <br>
      
      <div class="container text-center">
        <div class="row" style="height:110px">
          <div class="col">
            
          </div>
          <div class="col-8">
            
            <label for="inputPassword5" class="form-label" style="color:black;font-weight:bold;font-size: 16px;">Password</label>
            <input type="password" id="inputPassword5" name="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock"style="width: 300px" required>
            <div id="passwordHelpBlock" class="form-text" style="color:black;font-weight:bold;font-size:10px">
              Your password must be 8-20 characters long.
            </div>
            
            
          </div>
          <div class="col">
            
          </div>
        </div>
      </div>

      <div class="container text-center">
        <div class="row" style="height:79px">
          <div class="col">
            
          </div>
          <div class="col-8" >
            
            <div>
              <label for="exampleFormControlInput1" class="form-label" style="color:black;font-weight:bold;font-size: 16px;">Email address</label>
              <input type="email" name="exampleFormControlInput1" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com"style="width: 300px" required>
            </div>
            
          </div>
          <div class="col">
            
          </div>
        </div>
      </div>
  <br>
      <div class="container text-center">
        <div class="row" style="height:110px">
          <div class="col">
            
          </div>
          <div class="col-8">
            
            <label for="inputPassword5" class="form-label" style="color:black;font-weight:bold;font-size: 16px;">Gender</label>
            <input type="text" id ="gender"name="gender"class="form-control" placeholder="..." aria-label="Username" aria-describedby="basic-addon1" style="width: 300px" required>
           
            
            
          </div>
          <div class="col">
            
          </div>
        </div>
      </div>


      <div class="container text-center">
        <div class="row">

          <div class="col-8">
            
           
        

             <div class="col-8 offset-md-6">
             <input type = "submit" id = "confirmation" value="Confirm Identity" class="btn btn-warning col-md-6 align-item-start" name="confirmation" style ="width: 150px;"/>
            </div>
         
        </div>
      </div>
      </form>  
      <div class="stick-bottom">
        <a href="C:\xampp\htdocs\project\Login_Page.html" style="color:white;font-size:30px;font-weight:bold">Already a part? Click here to login!!</a>
      </div>
      
      

  <script src="https://kit.fontawesome.com/ee0769731c.js" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>