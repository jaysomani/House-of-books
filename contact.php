<?php
include "connection.php";
include "nav.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>contact us</title>
	<link rel="stylesheet" href="contact.css">
</head>
<body>
<div class="container">  
  <form id="contact" action="" method="post">
    <h3>House Of Books</h3>
    <h4>Contact us for custom quote</h4>
    <fieldset>
      <input placeholder="Your name" name="name" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" name="email" type="email" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number (optional)" name="phone_no" type="tel" tabindex="3" >
    </fieldset>
    <fieldset>
      <input placeholder="Your Web Site (optional)" name="website" type="text" tabindex="4" >
    </fieldset>
    <fieldset>
      <textarea placeholder="Type your message here...." name="comment" tabindex="5" required></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
    
  </form>
</div>
<div>
	<?php
if(isset($_POST['submit'])){
	$sql="INSERT INTO `contact` VALUES('$_POST[name]','$_POST[email]','$_POST[phone_no]','$_POST[website]','$_POST[comment]');";
mysqli_query($db,$sql);
}
	?>
</div>
<?php
	include 'footer.php';
	?>
</body>
</html>