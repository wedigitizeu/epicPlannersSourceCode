<?php 
/*TABLE CONSTANTS STARTS*/


/*TABLE CONSTANTS ENDS*/ 
error_reporting(0);
include_once("../db/db.php");
 //upload.php 
$cat=$_POST['serviceCategory'];
$date=date("d-m-Y");  

if(is_array($_FILES))   
{  
  foreach ($_FILES['files']['name'] as $name => $value)  
  {  
      $file_name = explode(".", $_FILES['files']['name'][$name]);  
      $allowed_ext = array("jpg", "jpeg", "png", "gif");  
      if(in_array($file_name[1], $allowed_ext))  
       {  
          $new_name = "Epic-Planners-".$cat."-".md5(rand()) . '.' . $file_name[1];  
          $sourcePath = $_FILES['files']['tmp_name'][$name];  
          $targetPath = "upload/".$new_name;  
          if($result=move_uploaded_file($sourcePath, $targetPath))  
          {  

            /*Image Resize Starts*/
               
              $orig_image = imagecreatefromjpeg($targetPath);
              $image_info = getimagesize($targetPath); 
              $width_orig  = $image_info[0]; // current width as found in image file
              $height_orig = $image_info[1]; // current height as found in image file
              $width = 1024; // new image width
              $height = 768; // new image height
              $destination_image = imagecreatetruecolor($width, $height);
              imagecopyresampled($destination_image, $orig_image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);
              // This will just copy the new image over the original at the same filePath.
              imagejpeg($destination_image, $targetPath, 100);

            /*Image Resize Ends*/
            $query="INSERT INTO `gallery`(`date`, `name`, `category`, `path`) VALUES
            ('$date','$new_name','$cat','$targetPath')";
            if(mysqli_query($conn,$query))
            {
           // echo "<center>Uploaded Successfully</center>";

            } 
          else
            {
            echo "Error:".mysqli_error($conn);
            }


          }

        }
            
  }  
        echo "<center><img width='15%'src='success.gif'/></center>";
}
else
{
  echo "<center>Please Upload Files</center>";
}  
?>  