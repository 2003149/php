<?php include('header.php') ?>

<?php

	$artistAlbum = array("jon"=>"genster","adel"=>"loser");
	
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