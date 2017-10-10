<!DOCTYPE html>
<html>
<head>
	<title>Nav and Footer
      <?php 
    if (isset($pageTitle)) {
        echo "CarHire - ".$pageTitle;
    } else {
        echo "CarHire";
    }
    ?>      
  </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/main.css">
</head>
<body>
	<nav class="navbar navbar-inverse ">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-    toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Home</a></li>
        <li><a href="#about">Location</a></li>
        <li><a href="#">Special Offers</a></li>  
        <li><a href="#">Cars</a></li>  
        <li><a href="#">Contact</a></li>  
        <li><a href="#">Airport Transfer</a></li>   
      </ul>
    </div>
  </div>
  		<!--second nav-->
  		<!--this nav is described with the center attribute-->
</nav>
<nav class="navbar navbar-inverse nav2" 
id="nav2">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
       <a class="navbar-brand image" href="#"><img class="center image" src="http://res.cloudinary.com/siazo/image/upload/v1507562729/car_jyrdnk.png" height="50" width="158"></a>
      <ul class="nav navbar-nav navbar-right" id="center">
        <li><a href="#" class="center rent">Rent a car</a></li>
      <li><a href="#" class="center line ">|</a></li>
      <li><a href="#" class="center new">New cars</a></li>
      
      </ul>
    </div>
  </div>
</nav>