<br><br>

	<form id="form">
	<div class="row clearfix">
		<div class="form-group col-lg-6 col-md-6 col-sm-12">
			<input id="name" type="text" placeholder="Your name">
		</div>


		<div class="form-group col-lg-6 col-md-6 col-sm-12">
			<input type="text" id="mobile" placeholder="Mobile Number">
		</div>


		<!-- <div class="form-group col-lg-6 col-md-6 col-sm-12">
			<input id="mobile" type="text" placeholder="Mobile Number">
		</div> -->


		<div class="form-group col-lg-12 col-md-12 col-sm-12">
			<input type="text" id="lookingFor"  placeholder="Looking For">
		</div>

		<div class="form-group col-lg-12">
			<input type="text" id="location" placeholder="Location">
		</div>

		
		<div class="form-group col-lg-12 col-md-12 col-sm-12">
			<button   id="submit" class="theme-btn btn-style-one" type="submit" name="submit-form"><span class="txt">Send now</span>
			</button>
			<center id="warning"></center>
		</div>
	</div>
</form>







<script>
	$(document).ready(function()
	{
		$("#submit").click(function(e)
		{

			e.preventDefault();
			var name=$("#name").val();
			var mobile=$("#mobile").val();
			var looking=$("#lookingFor").val();
			var location=$("#location").val();
			var nameReg='^[A-Za-z]{3,50}$';
			var onlyAlpha='^[A-Za-z]{3,50}$';
			var mobileRg='^[0-9]{10}$';

			if(name=="" || !name.match(nameReg))
			{

				warningMsg("Please Enter Valid Name ");

			}
			else if(mobile=="")
			{
				warningMsg("Please Enter Valid 10 Digit Mobile Number ");

			}else if(mobile.length !=10 || !mobile.match(mobileRg))
			{
				warningMsg("Please Enter Valid 10 Digit Mobile Number ");
			}
			else if(looking=="" || !looking.match(onlyAlpha))
			{
				warningMsg("Looking For..? ");
			}
			else if(location=="" || !location.match(onlyAlpha))
			{
				warningMsg("Please Enter Valid Location ");
			}
			else
			{
				$.post("insert/contact.php",
					{
						name:name,
						mobile:mobile,
						looking:looking,
						location:location
					},
					function(data)
					{
						$("#warning").html(data);
						$("#form")[0].reset()
					});
			}
						
		});
	});
	function warningMsg(x)
	{
		document.getElementById('warning').innerHTML=
			'<span style="color:red;">'+x+'<i class="em em-anguished" aria-role="presentation" aria-label="ANGUISHED FACE"></i></span>';

	}
	

</script>