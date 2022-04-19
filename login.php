<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	  <title>Login Page</title>
	
	  <style>
      body{
            background-image: url('2.jpg');
            background-repeat: repeat-x;
            background-size: 1000px;
            background-attachment: fixed;
            
        }
      .form{
        background-color: lightgreen;
        border-style: solid;
        border-radius: 20px;
        margin-top: 30px;
        margin-left: 900px;
        margin-right: 200px;
        padding-left: 15px;
        padding-top: 15px;
        padding-bottom: 9px;
        padding-right: 15px;
        box-shadow: 1px 1px 2px 2px black;
        }
       .nav-link{
         color: white;
       }
       .login{
         Width: 20%;
         align: center;
         background-color: blue;
       }
       .heading{
        text-shadow: 5px 5px 10px black;
        float: left;
        margin-left: 230px;
        margin-top: 130px;
        width: 25%;
        align-self: left;
        border: 5px red;
        padding:  0em 1em;
        border-radius: 16px;
        font-size: 24px;
        line-height: 2;
        box-shadow: 5px 5px 8px blue, 10px 10px 8px red, 15px 15px 8px green;
       }
       

    </style>
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact us</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Info
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Admins</a></li>
            <li><a class="dropdown-item" href="#">Students</a></li>
            
          </ul>
        
      
    </div>
  </div>
</nav>
	
	<p class="heading">Student Management System</p>
  
  
	<form class="form" action="" method="post">
   <div class="row mb-3">
          <label for="inputEmail3" name="email" class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-10">
            <input type="email" name="email" class="form-control" id="inputEmail3">
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputPassword3" name="password" class="col-sm-2 col-form-label">Password</label>
          <div class="col-sm-10">
            <input type="password" name="password" class="form-control" id="inputPassword3">
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputPassword3" name="password1" class="col-sm-2 col-form-label" placeholder="Admin/Student">Usertype</label>
          <div class="col-sm-10">
            <input type="text" name="password1" class="form-control" id="inputPassword3" placeholder="Admin/Student">
          </div>
        </div>
		
		<center><input type="submit" name="login" class="login"  value="Login" required></center>
	</form>
  <?php
        
         if(isset($_POST['login'])){
             $connection = mysqli_connect("localhost","root","");
             $db = mysqli_select_db($connection,"student_information");
             $query = "select * from user_master where Email = '$_POST[email]'";
             $query_run = mysqli_query($connection,$query);
             while($row = mysqli_fetch_assoc($query_run)){
              if($row['Email'] == "admin@gmail.com"){
                if($row['Password'] == "admin12"){
                  if($row['Role'] == "Admin"){
                    header("location: admin_login.php");
                     }
                    }
                  }
              elseif($row['Email'] == "student@gmail.com"){
                if($row['Password'] == "student"){
                  if($row['Role'] == "Student"){
                    header("location: studentinfo.php");
            
             
            
               
                 }
                 else{
                  echo "Wrong Credentials";
                }

             
         }
        }
      }
    }
        
         

     ?>
 
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> 
	
</body>
</html>