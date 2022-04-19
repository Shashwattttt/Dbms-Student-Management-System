<?php
include('config.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css">
    
    
    <title>Student information</title>
    
   
    


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <script src="jquery.js"></script> 
    <style>
        body{
            background-image: url('2.jpg');
            background-repeat: repeat-x;
            background-size: 1000px;
            background-attachment: fixed;
            
        }
        .form{
        background-color: rgb(13, 240, 126);
        border-style: solid;
        border-radius: 20px;
        margin-top: 75px;
        margin-left: 450px;
        margin-right: 450px;
        padding-left: 15px;
        padding-top: 15px;
        padding-bottom: 9px;
        padding-right: 15px;
        box-shadow:2px 2px 2px 2px black;
        

        }
        .submit2{
          align: center;
          font: Bold;

        }
        .nav-link{
         color: white;
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

    <div class="container">
       
    </div>
    
    <form class="form" action="studentinfo.php" method="POST">
   
    <div class="row mb-3">
	    	<label for="inputPassword3" name="Last_Name" class="col-sm-2 col-form-label">Id</label>
        <div class="col-sm-10">
	        <select type="search" class="form-control" name="id" id="id">
	        <option value="0">Id</option>
          <?php
           $db_host = "localhost";
           $db_user = "root";
           $db_pass = "";
           $db_name = "student_information";
           $conn = mysqli_connect($db_host,$db_user,$db_pass,$db_name);
           $query=mysqli_query($conn,"select * from id ");
           while($row=mysqli_fetch_array($query)){
             ?>
             
               <option value="<?php echo $row['id']; ?>"><?php echo $row['no1']; ?> </option>

             <?php
           }
           ?>
          
        </select>
        </div>
        </div>
        <div class="row mb-3">
          <label for="inputPassword3" name="First_Name" class="col-sm-2 col-form-label">First Name</label>
          <div class="col-sm-10">
            <input type="text" name="First_Name" class="form-control" id="inputPassword3">
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputPassword3" name="Last_Name" class="col-sm-2 col-form-label">Last Name</label>
          <div class="col-sm-10">
            <input type="text" name="Last_Name" class="form-control" id="inputPassword3">
          </div>
        </div>
        <div class="row mb-3">
	    	<label for="inputPassword3" name="Last_Name" class="col-sm-2 col-form-label">State</label>
        <div class="col-sm-10">
	        <select class="form-control" name="State" id="State">
	        <option value="0" id="12">State</option>
          <?php
           $db_host = "localhost";
           $db_user = "root";
           $db_pass = "";
           $db_name = "student_information";
           $conn = mysqli_connect($db_host,$db_user,$db_pass,$db_name);
           $query=mysqli_query($conn,"select * from state_master ");
           while($row=mysqli_fetch_array($query)){
             ?>
             
               <option  value="<?php echo $row['State_Id']; ?>"><?php echo $row['State']; ?> </option>

             <?php
           }
           ?>
          
        </select>
        </div>
        </div>
        
        <div class="row mb-3">
	    	<label for="inputPassword3" name="Last_Name" class="col-sm-2 col-form-label">District</label>
        <div class="col-sm-10">
	        <select class="form-control" name="District" id="District">
	        <option value="">District</option>
         
          </select>
        </div>
        </div>
        
        <div class="row mb-3">
	    	<label for="inputPassword3" name="Last_Name" class="col-sm-2 col-form-label">College</label>
        <div class="col-sm-10">
	        <select class="form-control" name="College" id="College">
	        <option value="0">College</option>
       
          </select>
        </div>
        <br>
        </div>
        <div class="row mb-3">
          <label for="inputPassword3" name="Roll_no" class="col-sm-2 col-form-label">Roll No.</label>
          <div class="col-sm-10">
            <input type="text" name="Roll_no" class="form-control" id="inputPassword3">
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputPassword3" name="DOB" class="col-sm-2 col-form-label" >Date of Birth</label>
          <div class="col-sm-10">
            <input type="text" name="DOB" class="form-control" id="inputPassword3" placeholder="XXXX/XX/XX">
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputPassword3" name="Phone" class="col-sm-2 col-form-label">Phone</label>
          <div class="col-sm-10">
            <input type="text"  name="Phone" class="form-control" id="inputPassword3">
          </div>
        </div>
        
                
            
          </div>
        </fieldset>
        
        <button type="submit" name="submit" class="btn btn-primary">Save</button>
      </form>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <?php 
      
      
         if(isset($_POST['submit'])){
      
          $connection = mysqli_connect("localhost","root","");
          $db = mysqli_select_db($connection,"student_information");
         
         $id = $_POST['id'];
         $First_Name = $_POST['First_Name'];
         $Last_Name = $_POST['Last_Name'];
         $State = $_POST['State'];
         $District = $_POST['District'];
         $College = $_POST['College'];
         $Roll_no= $_POST['Roll_no'];
         $DOB = $_POST['DOB'];
         $Phone = $_POST['Phone'];

         $sql = "INSERT INTO `student_information`.`student_table` (`id`, `FirstName`, `Last_Name`, `State`, `District`, `College`, `Roll_no`, `DOB`, `Phone`) VALUES ('$id' , '$First_Name', '$Last_Name', '$State', '$District', '$College', '$Roll_no', '$DOB', '$Phone');";
                 
         //echo $sql;
         
         if($connection->query($sql) == true){
             //echo "Successfully inserted";
             echo "<p class='submit2'><center><bold> Your Information has been saved .<bold></center></p><br><p class='submit1'>Thankyou</p>";
         }
         else{
           echo "Error: $sql <br> $connection->error";
         }

       $connection->close();
        }
        
          

       

 

?>
 <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        
</body>
</html> 
