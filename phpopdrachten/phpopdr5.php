<?php include('header.php') ?>
<?php
	$a[0] = 25;
	$a[1] = 32; 
	$a[2] = 11;
    $a[3] = 23;
    $a[4] = 67;

    foreach ($a as $num) {
        for($i=0; $i < ($num-($num%5))/5; $i++){
		echo "<img src='/img/swim.png' width='50'>";
        }
        echo "<br>";
	}

?>
<?php include('footer.php'); ?>

