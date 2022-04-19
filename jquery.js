$(document).ready(function(){
   $("#State").on('change',function(){
       var StateID=$(this).val();
       $.ajax({
           method:"post",
           url:"yo.php",
           data:{id:StateID},
           dataType:"html",
           success:function(data){
               $("#District").html(data);
           }
       });
   
       
   });
   $("#District").on('change',function(){
       var DistrictID=$(this).val();
       $.ajax({
           method:"post",
           url:"yo.php",
           data:{District_Id:DistrictID},
           dataType:"html",
           success:function(data){
               $("#College").html(data);
           }
       });
   
       
   });


});