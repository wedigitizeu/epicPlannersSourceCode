<?php 

error_reporting(0);
include_once("../../db/db.php");



 
 //upload.php  
 $output = '';  
 if(is_array($_FILES))   
 {  
      foreach ($_FILES['files']['name'] as $name => $value)  
      {  
           $file_name = explode(".", $_FILES['files']['name'][$name]);  
           $allowed_ext = array("jpg", "jpeg", "png", "gif");  
           if(in_array($file_name[1], $allowed_ext))  
           {  
                $new_name = md5(rand()) . '.' . $file_name[1];  
                $sourcePath = $_FILES['files']['tmp_name'][$name];  
                $targetPath = "gallery/".$new_name;  
                if(move_uploaded_file($sourcePath, $targetPath))  
                {  
                     $output ="done";  
                }                 
           }            
      }  
      echo $output;  
 } 
 else
 {
  echo "error";
 }
  
 













//$cat=$_POST['serviceCategory'];
//$date=date("d-m-Y");  

/*if(is_array($_FILES))   
{  
  foreach ($_FILES['files']['name'] as $name => $value)  
  {  
      $file_name = explode(".", $_FILES['files']['name'][$name]);  
      $allowed_ext = array("jpg", "jpeg", "png", "gif");  
      if(in_array($file_name[1], $allowed_ext))  
       {  
          $new_name = "Epic-Planners-".$cat."-".md5(rand()) . '.' . $file_name[1];  
          $sourcePath = $_FILES['files']['tmp_name'][$name];  
           $targetPath = "gallery/".$new_name;  

          if($result=move_uploaded_file($sourcePath, $targetPath))  
          {  

            $query="INSERT INTO `gallery`(`date`, `name`, `category`, `path`) VALUES
            ('$date','$new_name','$cat','$targetPath')";
            if(mysqli_query($conn,$query))
            {
           
              $success="<center>Uploaded Successfully</center>";

            } 
          else
            {

              $error="Error:".mysqli_error($conn);
            }


          }

        }
            
  }  
        echo "<center><img width='15%'src='../gif/success_celebration_800x600.gif'/></center>";
        echo $success;
        echo $error;
        echo "smsmdsm";
}
*/
?>  