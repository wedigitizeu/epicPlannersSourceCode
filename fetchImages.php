
<?php
session_start();


if(isset($_POST['limit'],$_POST['start']))
{
	$limit=$_POST['limit'];
	$start=$_POST['start'];
	$category=$_SESSION["category"];

	
	
	
	include_once('db/db.php');

				$query="SELECT * FROM `gallery` WHERE category='$category' LIMIT $start , $limit ";
				$exe=mysqli_query($conn,$query);
				echo mysqli_error($conn);

				if(mysqli_num_rows($exe)>0)
				{
					while($data=mysqli_fetch_assoc($exe))
					{

				?>
						
					 <div  class="service-block-three col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<a><img src="images/galleryImages/<?php echo $data["path"];?>" alt="" /></a>
						</div>
						 <!-- <div class="lower-content">
							<h3><a href="residental-interior.html"><?php 
							//echo $data["category"]?></a></h3> 
							<div class="text">Override the digital divide with additional clickthroughs from DevOps. Nanotech Nology imme rsion along the information highway will close the loop.</div>
							<a href="residental-interior.html" class="read-more">Read more</a> -
						</div> -->
					</div> 
				</div>

				

<?php
				
					}
				}
				else {
					//header('Location:index.php');
				}
}
?>