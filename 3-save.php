<?php
// (A) DATABASE CREDENTIALS - CHANGE TO YOUR OWN!
define("DB_HOST", "localhost");
define("DB_NAME", "islamic db");
define("DB_CHARSET", "utf8mb4");
define("DB_USER", "root");
define("DB_PASSWORD", "");

// (B) CONNECT TO DATABASE
$pdo = new PDO(
  "mysql:host=".DB_HOST.";charset=".DB_CHARSET.";dbname=".DB_NAME,
  DB_USER, DB_PASSWORD, [
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]);

// (C) INSERT
$stmt = $pdo->prepare("INSERT INTO `survey1` (`email`, `name`, `message`) VALUES (?, ?, ?)");
$stmt->execute([$_POST["email"], $_POST["name"], $_POST["message"]]);

/* (X) SEND EMAIL
$message = "";
foreach ($_POST as $k=>$v) { $message .= "$k : $v\r\n"; }
mail("admin@site.com", "Survey Received", $message);
*/

// (D) RESULTS
echo "THANKS FOR CONTACTING BUSIA ISLAMIC MEDIA";