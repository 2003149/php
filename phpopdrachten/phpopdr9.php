<?php include('header.php') ?>

<?php

	$artistAlbum = array("Stephan"=>"Masters","daniel"=>"rossie","justin"=>"bieber");
	
	echo "<table>";
		foreach ($artistAlbum as $artist => $album) {
			echo "<tr>";
				echo "<td>".$artist."</td>";
				echo "<td>".$album."</td>";
			echo "</tr>";
		}
	echo "</table>";
	
?>

<?php include('footer.php'); ?>