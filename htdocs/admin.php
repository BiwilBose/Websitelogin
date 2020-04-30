<?php
session_start();

if ($_SESSION["checkuser"] === "login")
	{
        
	} else {
		header("Location: http://localhost/index.php");
	}
?>
<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1 {font-family: "Raleway", sans-serif}
body, html {height: 100%}
.bgimg {
  background-image: url('https://www.elsetge.cat/myimg/f/54-548868_4k-windows-10-green.jpg');
  min-height: 100%;
  background-position: center;
  background-size: cover;
}
 .button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;

}
</style>
<body>


<div class="bgimg w3-display-container w3-animate-opacity w3-text-white">
  <div class="w3-display-topleft w3-padding-large w3-xlarge">
  </div>
  <div class="w3-display-middle">
    <h1 class="w3-jumbo w3-animate-top">You are Now Logged In</h1>
    <a href="logout.php" class="button"> Click her to Logout</a>
    <hr class="w3-border-grey" style="margin:auto;width:40%">
  </div>
  <div class="w3-display-bottomleft w3-padding-large">
  </div>
</div>

</body>
</html>
