<?php
  include("connection.php")

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
  
 <form method="POST" name = "form" action = "new_Login.php" onsubmit = "return isvalid()">

  <br>
  <h1 align="center" style="color:white;font-size:90px"><pre>  Savoury Secrets</pre></h1>
  
  <br>
  <br>
  

 
  
  <div class="container text-center">
    <div class="bg-warning p-2 text-dark bg-opacity-50 col-md-6 offset-md-4" style="background-image:var(--bs-gradient);width: 500px;height:368px">
      
      <div class="col" style="height:340px">
        <br>
        <h3 style="color:white;font-size:40px">Login</h3>
        <br>
        
      <div class="container text-center">
        <div class="row" style="height:79px">
          <div class="col">
            
          </div>
          <div class="col-8" >
            
            <div>
              <label for="exampleFormControlInput1" class="form-label" style="color:black;font-weight:bold;font-size: 16px;">Email address</label>
              <input type="email" class="form-control" id="exampleFormControlInput1" name="exampleFormControlInput1" placeholder="name@example.com"style="width: 300px">
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
            <input type="password" id="inputPassword5" name ="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" style="width: 300px">
            <div id="passwordHelpBlock" class="form-text" style="color:black;font-weight:bold;font-size:10px">
              Your password must be 8-20 characters long.
            </div>
            
            
          </div>
          <div class="col">
            
          </div>
        </div>
      </div>


      <div class="container text-center">
        <div class="row" style="height:110px">
          <div class="col">
            
          </div>
          <div class="col-8">
            
            <div class="container text-center">
        <div class="row aglin-items-start">

          

          
            
           
        <input type = "submit" id = "confirmation" value="Confirm Identity" class="btn btn-dark col-md-6 align-item-start" name="confirmation" style ="width: 150px;"/>

              
              
            
           

              


            
            
            
    
       
        </div>
      </div>
    </div>
  <br>
      <div class="sticky-bottom">
        <a href="C:\xampp\htdocs\project\Registeration.html" class="sticky-bottom"style="color:white;font-size:30px;font-weight:bold">Not a part yet? Click here to register!!</a>
      </div>
    </div>
  </div>    
      



     
    </form>
    <script>
      function isvalid(){
        var user= document.form.exampleFormControlInput1.value;
        var pass= document.form.inputPassword5.value;

        if(user.length=="" && pass.length=="")
        {
          alert("Email and password fields are empty.");
          return false
        }
        else{
          if(user.length==""){
            alert("Email field is empty.");
            return false
          }
          if(pass.length==""){
            alert("Password field is empty");
            return false
          }
        }




      }
    </script>
          
  
  <script src="https://kit.fontawesome.com/ee0769731c.js" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>