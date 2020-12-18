<?php
include("header.html");
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
}

* {
  box-sizing: border-box;
}

form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}
</style>
</head>
<body>

<h2>Search Here </h2>

<form class="example" action="/action_page.php">
  <input type="text" placeholder="Search.." name="search">
  <button type="submit"><i class="fa fa-search"></i></button>
  <input type="checkbox" id="gettitle" name="vehicle1" value="Bike">
  <label for="vehicle1"> Title</label><br>
  <input type="checkbox" id="x" name="vehicle2" value="Car">
  <label for="vehicle2"> Username</label><br>
  <input type="checkbox" id="getpassword" name="vehicle3" value="Boat">
  <label for="vehicle3"> Password</label><br>
  <input type="checkbox" id="geturl" name="vehicle3" value="Boat">
  <label for="vehicle3"> URL</label><br><br>
  <input type="submit" value="Search" id="search" onclick="http://localhost/Sample/SearchUser.php"> 
</form>

</body>
</html> 
