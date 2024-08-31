<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Doctors</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<style>
img{
      border-radius:25px; 
      padding:2px;
    }
    .navbar-brand{
        color:white;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    
    }
    .navbar-brand:hover{
       color: rgb(255, 255, 255);
    }
    .nav-link{
        color:white;
    }
    .nav-link:hover{
       color: rgba(255, 255, 255, 0.676);
    }
    .container{
        background-image: url(search.avif);
        height:75vh;
    }
    .mb-4{
        color:white;
        padding:10px;
        font-size:50px;
    }
    label{
        color:white;
        font-size: 20px;
    }
    .last{
    background-image: url(last.png);
    background-position:center;
    background-size: cover;
    height:80vh;
    padding:30px;
    font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serifs;
   }
   p{
    font-size: 20px;
   }
</style>
</head>
<body>
<!--creating navigation bar-->
 <nav class="navbar navbar-expand-lg bg-dark border-body">
        <div class="container-fluid">
          <img src="logo.png"  width="90" height="70">
          <a class="navbar-brand" href="online.html"><b>Healthy_Wealthy Hub </b></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button> 
          <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item active">
                <a class="nav-link" href="home.php">Home</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="available.html">Book Appointment</a>
              </li>
            </ul>
            </ul>
          </div>
        </div>
      </nav> 
    <!--navigation bar ends-->  

    <div class="container mt-5">
        <h1 class="mb-4">FIND DOCTORS OR SPECIALISTS</h1>
        <div class="form-group">
            <label for="searchInput">Search</label>
            <input type="text" id="searchInput" class="form-control" list="suggestions" placeholder="Type to search for different specialists">
            <datalist id="suggestions">
                <!-- Options will be added dynamically -->
            </datalist>
        </div>
    </div>
            


    <!-- Bootstrap JS -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Define your options and their corresponding URLs
        const options = [
            { value: 'Gynaecology', url: 'consult_pp.php' },
            { value: 'Pediatrics', url: 'consult_child.php' },
            { value: 'Psychiatry', url: 'consult_anxiety.php' },
            { value: 'General physician', url: 'consult_cold.php' },
            { value: 'Dermatology', url: 'consult_acne.php' },
            { value: 'Gastroenterologist', url: 'consult.php' },
        ];

        const datalist = document.getElementById('suggestions');

        // Populate the datalist
        options.forEach(function(item) {
            const option = document.createElement('option');
            option.value = item.value;
            datalist.appendChild(option);
        });

        // Handle redirection based on user selection
        const input = document.getElementById('searchInput');
        input.addEventListener('change', function() {
            const selectedValue = this.value;
            const selectedOption = options.find(option => option.value === selectedValue);
            if (selectedOption) {
                window.location.href = selectedOption.url;
            }
        });
    });
</script><br><br><br><br>

<div class="last">
    <h2><b>CONTACT US</b></h2><br><br>
    <p>For any query contact us through the following details given below :</p><br>
    <p>Phone no : 9983889273</p><br>
    <p>Email id : healthy_wealthy121@gmail.com</p><br>
    <h3>Access video consultation with the top and<br> best doctors on Healthy_Wealthy Hub.</h3>
 </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> 
</body>
</html>