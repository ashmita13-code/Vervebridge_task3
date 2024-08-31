<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Consult</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    img{
        border-radius:20px;
    }
   body{
    background-color:black;
   }
    .navbar{
     font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
     font-weight: 900;
    
    }
    .wrapper{
        background-color:rgb(255, 255, 255, 0.858);
        box-shadow:100%;
        height:500px;
        width:470px;
        margin-left:360px;
        margin-top:20px;
        border-radius:8px;
        font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    }
    h1{
        font-size:30px;
        font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        padding:40px;
        text-align: center;
        margin-top: 30px;
    }
    form{
        padding:3px;
        margin: top 6px;
        margin-left:50px;
        margin-bottom:20px;
        
    }
    form input{
        border:none;
        box-sizing: border-box;
        padding:7px;
        margin:12px;
        width:80%;
        background-color:lightblue;
        border-radius: 6px;
    }

    form input:hover{
    background-color: rgb(231, 222, 160);
}

    form label{
        font-size:15px;
        margin-left:20px;
    }
   .form-control{
    background-color:lightblue;
   }
    </style>
<body>
<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="logo.png"  width="50" height="50" class="d-inline-block align-text-top">
      Healthy_Wealthy Hub
    </a>
  </div>
</nav>

<!-- form for consulting a doctor -->
<div class="wrapper">
<h1>Consult with a Doctor</h1>
    <form method="post" action="login.php">
        <div class="mb-3">
          <div class="col-sm-10">
          <label class="form-label">Speciality :</label>
          <input class="form-control" type="text" value="Psychiatry : Rs 549" aria-label="readonly input example" readonly>
          </div>
        </div>
        <div class="mb-3">
          <label class="form-label">Patient name :</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="patient_name" placeholder="enter your name" required="required">
          </div>
          <label  class="form-label">Mobile number :</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="phone" placeholder="enter mobile number" required="required">
          </div>
        </div><br>
        <div class="form-btn">
        <input type="submit" name="continue" class="btn btn-primary" value="Submit"><br><br>
        </div>
  </div>
<!-- form ends here -->
    

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> 
</body>
</html>