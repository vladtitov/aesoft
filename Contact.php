<?php 	include "include.php"; ?>
<!doctype html>
<head>
    <title>UPLIGHT</title>
   <?php 	include "com/header.htm"; ?>
</head>
<body>
<?php
include2('com/nav'.$ln.'.htm');
include2('com/carusel'.$ln.'.htm');
?>

<div class="container" id="Contact">
    <?php
    include2('content/contact-header'.$ln.'.htm');
    include2('content/contact-info'.$ln.'.htm');
	 include2('com/contact-form'.$ln.'.htm');
     ?>
</div>
<?php include2('com/footer.htm'); ?>

</body>
</html>