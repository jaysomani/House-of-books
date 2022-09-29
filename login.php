 <?php
include "connection.php";
?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
<form method="post">
	
    <div id="container" class="container">
        <!-- FORM SECTION -->
		
        <div class="row">
            <!-- SIGN UP -->
			
            <div class="col align-items-center flex-col sign-up">
                <div class="form-wrapper align-items-center">
                    <div class="form sign-up">
                        <div class="input-group">
                            <i class='bx bxs-user'></i>
                            <input type="text" name="username" placeholder="Username">
                        </div>
                        <div class="input-group">
                            <i class='bx bx-mail-send'></i>
                            <input type="email" name="email" placeholder="Email">
                        </div>
                        <div class="input-group">
                            <i class='bx bxs-lock-alt'></i>
                            <input type="password" name="password" placeholder="Password">
                        </div>
                        <div class="input-group">
                            <i class='bx bxs-lock-alt'></i>
                            <input type="password" name="confirm_password" placeholder="Confirm password">
                        </div>
                        <button name="signup">
							Sign up
						</button>
                        <p>
                            <span>
								Already have an account?
							</span>
                            <b onclick="toggle()" class="pointer">
								Sign in here
							</b>
                        </p>
						<p>
                            <span>
								back to Home?
							</span>
                            <b onclick="toggle()" class="pointer">
								click here
							</b>
                        </p>
                    </div>
                </div>

            </div>
			


            <!-- END SIGN UP -->
            <!-- SIGN IN -->
            <div class="col align-items-center flex-col sign-in">
                <div class="form-wrapper align-items-center">
                    <div class="form sign-in">
                        <div class="input-group">
                            <i class='bx bxs-user'></i>
                            <input type="text" name="username" placeholder="Username">
                        </div>
                        <div class="input-group">
                            <i class='bx bxs-lock-alt'></i>
                            <input type="password" name="password" placeholder="Password">
                        </div>
                        <button name="signin">
							Sign in
						</button>
                        <p>
                            <b>
								Forgot password?
							</b>
                        </p>
                        <p>
                            <span>
								Don't have an account?
							</span>
                            <b onclick="toggle()" class="pointer">
								Sign up here
							</b>
                        </p>
						<p>
                            <span>
								back to Home?
							</span>
                            <b onclick="toggle()" class="pointer">
								click here
							</b>
                    </div>
                </div>
                <div class="form-wrapper">

                </div>
            </div>
            <!-- END SIGN IN -->
        </div>
        <!-- END FORM SECTION -->
        <!-- CONTENT SECTION -->
        <div class="row content-row">
            <!-- SIGN IN CONTENT -->
            <div class="col align-items-center flex-col">
                <div class="text sign-in">
                    <h2>
                        Welcome
                    </h2>

                </div>
                <div class="img sign-in">

                </div>
            </div>
            <!-- END SIGN IN CONTENT -->
            <!-- SIGN UP CONTENT -->
            <div class="col align-items-center flex-col">
                <div class="img sign-up">

                </div>
                <div class="text sign-up">
                    <h2>
                        Join with us
                    </h2>

                </div>
            </div>
            <!-- END SIGN UP CONTENT -->
			
        </div>
        <!-- END CONTENT SECTION -->
    </div>
	</form>
<!-- /////////////////////////////////php for login/////////////////////// -->
<?php

if(isset($_POST['signin'])){
	$abc=0;
	$res=mysqli_query($db,"SELECT * FROM `user` WHERE username='$_POST[username]' && password='$_POST[password]';");
	$abc=mysqli_num_rows($res);
	
	if($abc==0){
		?>
		<script type="text/javascript">
			alert("username or password incorrect");
			</script>
		<?php
	}else{
		?>
		<script type="text/javascript">
			window.location="index.php";
			</script>
		<?php
	}
}

?>

<!-- ////////////////////////////////php for signup/////////////////////// -->
	<?php

if(isset($_POST['signup'])){

$count=0;
$sql ="SELECT username FROM `user`";
$res=mysqli_query($db,"$sql");

while($row=mysqli_fetch_assoc($res)){
	if($row['username']==$_POST['username']){
		$count=$count+1;
	}
}
if($count==0){
	mysqli_query($db, "INSERT INTO `USER` VALUES('$_POST[username]','$_POST[email]','$_POST[password]','$_POST[confirm_password]');");
?>
    <script type="text/javascript"> 
alert('sign up successful');
</script>
<?php
}else{
	?>
<script type="text/javascript"> 
alert('username already exists');
</script>
<?php

}
}
	?>

</body>
<script>
    let container = document.getElementById('container')

    toggle = () => {
        container.classList.toggle('sign-in')
        container.classList.toggle('sign-up')
    }

    setTimeout(() => {
        container.classList.add('sign-in')
    }, 200)
</script>

</html>