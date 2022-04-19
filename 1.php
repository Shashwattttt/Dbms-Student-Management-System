<?php 
if(isset($_POST['student_login'])){ 
      $connection = mysqli_connect("localhost","root","");
      $db = mysqli_connect_db($connection,"");
      $query = "select * from user master where email = '$_post[email]'";
      $query_run = mysqli_query($connection,$query);
      while($row = mysqli_fetch_assoc($query_run)){
         if($row['email'] == $_post['email']){
           if($row['password'] == $_post['password']){
             if($row['usertype'] == $_post['usertype']){
               echo "successful";
             }
           }
         }
      }
			
		}
?>
<div class="row mb-3">
        <label for="inputPassword3" name="usertype" class="col-sm-2 col-form-label">Usertype</label>
          <div class="col-sm-10">
            
            <select id="country">
              <option value="Admin">Admin</option>
              <option value="Student">Student</option>
            </select>

          </div>

          if($row['usertype'] == $_post['usertype']){

            <div class="row mb-3">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-10">
            <input type="email" name="email" class="form-control" id="inputEmail3">
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
          <div class="col-sm-10">
            <input type="password" name="password" class="form-control" id="inputPassword3">
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Usertype</label>
          <div class="col-sm-10">
            <input type="text" name="password1" class="form-control" id="inputPassword3">
          </div>
        </div>
		
		<center><input type="submit" name="student_login" class="btn btn-primary" id="submit" value="Login" required></center>
	</form>

  <form action="" method="post">
			Email ID: <input type="text" name="email" required><br><br>
			Password: <input type="password" name="password" required><br><br>
			<input type="submit" name="submit" value="LogIn">
		</form><br>
    <?php 
   error_reporting(0);
   $connection = mysqli_connect("localhost","root","");
   $db = mysqli_select_db($connection,"student_information");
   $query = "select * from student_table";
   $query_run = mysqli_connect($connection,$query);
   $total = mysqli_num_rows($query_run);
   echo "$total";
 ?>
 echo $result['id']." ".$result['FirstName']$result['Last_Name']." "$result['State']." "$result['District']." "$result['College']." "$result['Roll_no']." "$result['DOB']." "$result['Phone']." "$result['Saved Info'];
   if($total!=0)