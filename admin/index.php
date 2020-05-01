<?php include_once("public/head.php");?>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h1><?php echo "Epic Planner's" ?></h1>
      </div>
      <div class="login-box">
        <div class="login-form">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3>
          <div class="form-group">
            <label class="control-label">USERNAME</label>
            <input class="form-control" id="email" name="email" type="text" placeholder="Email" autofocus>
          </div>
          <div class="form-group">
            <label class="control-label">PASSWORD</label>
            <input class="form-control" id="password" name="password" type="password" placeholder="Password">
          </div>
          <div class="form-group">
            <div class="utility">
              <div class="animated-checkbox">
                <label>
                  <input type="checkbox"><span class="label-text">Stay Signed in</span>
                </label>
              </div>
              <p class="semibold-text mb-2"><a href="#" data-toggle="flip">Forgot Password ?</a></p>
            </div>
          </div>
          <div class="form-group btn-container">
            <button id="sub" name="sub" class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN IN</button>
            
            <center id="response" style="color:red;font-weight:bold;"></center>
          </div>
          
        </div>
        <form class="forget-form" action="index.html">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>Forgot Password ?</h3>
          <div class="form-group">
            <label class="control-label">EMAIL</label>
            <input class="form-control" type="text" placeholder="Email">
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block"><i class="fa fa-unlock fa-lg fa-fw"></i>RESET</button>
          </div>
          <div class="form-group mt-3">
            <p class="semibold-text mb-0"><a href="#" data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i> Back to Login</a></p>
          </div>
        </form>
      </div>
      
    </section>


    <script>
      function eraseMsg()
      {
        $("#response").html(" ");
        
      }

    $(document).ready(function()
    {
      
      

      $("#email").focus(eraseMsg);
      $("#password").focus(eraseMsg);


      $("#sub").click(function()
      {
            var email=$("#email").val();
            var password=$("#password").val();
            
            $.post("insert.php",
            {
              email:email,
              password:password
            },
            function(data)
            {
             

              $("#response").html(data);
              
            });
      });
    });

    </script>


    <?php include_once("public/footer.php");?>