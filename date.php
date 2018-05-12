<!DOCTYPE HTML>
<HTML>
<head>
<style>
.container{
width: 1000px;
padding-left: 400px;	
padding-top: 100px;	
}

</style>
</head>
<body >
<ul style= " background-color: #333; height: 40px;">
<li><a class="active" href="#home" style="
    float: left;

    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}">HOME</a></li>
</ul>

<div class="container">
<h1 style='font-size: 50px'> Welcome to HNG </br><span style='padding-left: 30px;'>INTERNSHIP</span> </h1>

<?php 
 date_default_timezone_set('Africa/Lagos');
 $date= date('h:i:sa') ;
 echo "<p style='color: red; font-size: 100px; margin: 0;'>";
 echo $date;
  echo "</p>";
 ?>
 </div>
 </body>