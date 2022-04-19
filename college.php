<?php
include('config.php');
if(!empty($_POST["District_Id"])){

$select_category="SELECT * FROM college_master WHERE District_Id='".$_POST['State_Id']."'";

$res=mysqli_query($conn,$select_category);
$rowCount = mysqli_num_rows($res);

if($rowCount > 0){
        echo '<option value="">Select City</option>';

        while($row =mysqli_fetch_array($res)){ 
		
            echo '<option value="'.$row['College_Id'].'">'.$row['College'].'</option>';
        }
    }
    else{
        echo '<option value="">DATA NOT AVAILABLE</option>';
    }


}

?>