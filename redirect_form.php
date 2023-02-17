
<!DOCTYPE html>
<html>
<head>
<title>Redirect Form To a Particular Page On Submit - Demo Preview</title>
<meta content="noindex, nofollow" name="robots">
<link href='css/redirect_form.css' rel='stylesheet' type='text/css'> <!--== Include CSS File Here ==-->
<link href="css/o-dummy.css ref='styleesheet' type=text/css'>
</head>
<body>
<div class="main">
<div class="first">
<h2>Redirect Form To a Particular Page On Submit using PHP</h2>
<form action="2-form.php" id="#form" method="post" name="#form">

<label>Email :</label>
<input id="email" name="email" placeholder='Valid Email Address' type='text'>
<label>Name :</label>
<input id="name" name="name" placeholder='name' type='text'>
<label>message:</label>
<input id="message" name="message" placeholder='message' type='text' value="">
<input id='btn' name="submit" type='submit' value='Submit'>
<!---- Including PHP File Here ---->
<?php
include "include/2-form.php";
?>
</form>
</div>
</div>
</body>
</html>

