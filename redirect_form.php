
<!DOCTYPE html>
<html>
<head>
<title>Redirect Form To a Particular Page On Submit - Demo Preview</title>
<meta content="noindex, nofollow" name="robots">
<link href='css/redirect_form.css' rel='stylesheet' type='text/css'> <!--== Include CSS File Here ==-->
</head>
<body>
<div class="main">
<div class="first">
<h2>Redirect Form To a Particular Page On Submit using PHP</h2>
<form action="redirect_form.php" id="#form" method="post" name="#form">

<label>Email :</label>
<input id="email" name="email" placeholder='Valid Email Address' type='text'>
<label>Name :</label>
<input id="name" name="name" placeholder='Your Name' type='text'>

<label>message</label>
<input id="message" name="message" placeholder='messagw' type='text' value="">
<input id='btn' name="submit" type='submit' value='Submit'>
<!---- Including PHP File Here ---->
<?php
include "include/index.html";
?>
</form>
</div>
</div>
</body>
</html>

<?php
if(isset($_POST['submit'])){
// Fetching variables of the form which travels in URL
$email = $_POST['email'];
$name = $_POST['name'];
$message = $_POST['message'];
if($email !=''&& $name !=''&& $message !='')
{
//  To redirect form on a particular page
header("Location:https://index.html");
}
else{
?><span><?php echo "Please fill all fields.....!!!!!!!!!!!!";?></span> <?php
}
}
?>
