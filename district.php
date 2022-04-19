<?php
include('config.php');
if(!empty($_POST["State_Id"])){

$select_category="SELECT * FROM district_master WHERE State_Id='".$_POST['State_Id']."'";

$res=mysqli_query($conn,$select_category);
$rowCount = mysqli_num_rows($res);

if($rowCount > 0){
        echo '<option value="">Select State</option>';

        while($row =mysqli_fetch_array($res)){ 
		
            echo '<option value="'.$row['District_Id'].'">'.$row['District'].'</option>';
        }
    }
    else{
        echo '<option value="">not available</option>';
    }


}

?>