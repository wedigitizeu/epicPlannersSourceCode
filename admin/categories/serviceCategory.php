<?php

include_once("../db/db.php");

$serviceCategory = array();

$query="SELECT * FROM `category`";
$exe=mysqli_query($conn,$query);

if(mysqli_num_rows($exe)>0)
{
    $records=0;
    while($data=mysqli_fetch_assoc($exe))
    {

        array_push($serviceCategory,$data['category']);


    }

     
}

?>