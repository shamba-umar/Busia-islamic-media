<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>BUSIA ISLAMIC MEDIA</title>
    <link rel="stylesheet" href="O-dummy.css">
  </head>
  <body>
    <?php
    // (A) SAVE SURVEY FORM ON SUBMIT
    if (isset($_POST["email"])) { require "3-save.php"; }
    ?>

    <!-- (B) SURVEY FORM -->
    <form method="post">
      <label>Email</label>
      <input type="email" name="email" required>
      <label>Name</label>
      <input type="text" name="name" required>
      <label>message</label>
      <input type="text" name="message" required>
      <input type="submit" value="Submit">
    </form>
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