<?php include  "include/config.php" ?>
<?php

if(isset($_POST['owner_signup'])){
$value = $_POST['firstname'];
$value2 = $_POST['lastname'];
$value3 = $_POST['email'];
$value4 = $_POST['username'];
$value5 = md5($_POST['password']); 

$sql="INSERT INTO users(firstname, lastname, email, username, password)
VALUES('$value', '$value2', '$value3', '$value4', '$value5')";
 
$result = @mysql_query($sql); 
}

?>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Sign Up for Free</h1>
          
          <form action="" method="post">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" id="firstname" required autocomplete="off" />
            </div>        
            
        
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text" id="lastname" required autocomplete="off"/>
            </div>
          </div>
            
            <div class="field-wrap">
              <label>
                Username<span class="req">*</span>
              </label>
              <input type="text" id="username" required autocomplete="off" />
            </div>

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password" id="password" required autocomplete="off"/>
          </div>
                      
          <button type="submit" name="register" class="button button-block">Sign Up </button>  
          </form>
        </div>
        
        <div id="login">   
          <h1>Welcome Back!</h1>
          
          <form action="/" method="post">
          
            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off"/>
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
          <button class="button button-block">Log In</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
<script src="view1/js/index.js"></script>
<?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                  if ($result){
                    echo "<BR>";
                    echo '<div class="submit_message"><span style="color:green"> Thank you for your registration! </span></div>';
                  }
                  else {
                    echo "<BR>";
                    echo '<div class="submit_message"<span style="color:red"> Registration failed, please try again! </span></div>';
                  }}
                  @mysql_close($db);
                  ?>
  
  