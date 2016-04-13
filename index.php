<?php
include "include.php";
?>
<!doctype html>
<head>
<title>AEsoftware | Mobile Applications | Kiosk Software | CMS | Web Applications </title>
    <?php 	include 'com/header'.$ln.'.htm'; ?>
</head>


<body id="home">

 <?php
  	include2('com/nav'.$ln.'.htm');
	include2('com/carusel'.$ln.'.htm');
   
  ?>
  <div class="container">  
 <?php	
	include2('com/welcome'.$ln.'.htm');
	include2('content/panels3'.$ln.'.htm');
	include2('content/features'.$ln.'.htm');
	include2('content/main_services'.$ln.'.htm');
	
?>

    </div>

<?php
include2('com/action_request'.$ln.'.htm');
include2('com/footer'.$ln.'.htm');
?>

</body>

</html>

