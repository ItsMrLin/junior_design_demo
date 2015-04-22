<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <h1>Profile</h1>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/jd.css">

    <!-- Custom styles for this template -->
    <!-- <link href="http://getbootstrap.com/examples/starter-template/starter-template.css" rel="stylesheet"> -->

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>
p{
font-size: 20px;
line-height: 180%;
margin: 40px 60px;
}


</style>
</head>
<body>
<?php if (strtolower($_POST['name']) == "jerry") {?>

<div id="jerry">
	    
	    <p> <img src="img/Jerry.jpg" alt="Jerry Pic" style="width:240px;height:240px" align="left" hspace="140">
	    	
	    	Name:     Jerry Lin <br>
	        Company:  eBay Inc. <br>
	        Position: Software Engineer <br>
	        Email:    zlin48@gatech.edu <br>
	        Phone:    770-675-8533 <br>
	        Linkedin: <a href="https://www.linkedin.com/profile/view?id=203416098"><img src="img/linkedin.png" alt="linkedin pic" style="width:25px;height:25px" > </a>
	    </p>
</div>

<?} else {?>

<div id="faye">     
      <p> <img src="img/Faye.jpg" alt="Faye Pic" style="width:240px;height:240px" align="left" hspace="140">
        
        Name:     Faye Zhang <br>
          School:   Georgia Institute of Technology <br>
          Major:    Computer Science <br>
          Email:    faye413@gatech.edu <br>
          Phone:    770-999-543 <br>
          Linkedin: <a href="https://www.linkedin.com/profile/view?id=2203106740"><img src="img/linkedin.png" alt="linkedin pic" style="width:25px;height:25px" > </a>
      </p>
</div>
<?php
}
?>

<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jd.js" type="text/javascript"></script>  

<script>
$(document).ready(function(){
  console.log($name);
       if ($name="jerry") {
          $('#jerry').show();
          $('#faye').hide();
       } 
       if ($name="faye") {
       	  $('#faye').show();
          $('#jerry').hide();
       }                                          
    });
</script>

</body> 
<html>


