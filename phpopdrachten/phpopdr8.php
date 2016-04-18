<?php include('header.php') ?>
<?php
	function convCtoF($c) {
		echo ($c*9/5)+32;
	}
	
	function isDivisibleBy3($num) {
		return ($num%3 == 0)? "true":"false";
	}
	
	function mirrorString($string) {
		return strrev($string);
	}
?>

<form action="" method="post">
	<br><br>zet °C / °F: <input type="text" name="convertTemp">
	<?php
		if ($_POST["convertTemp"] != "" && is_numeric($_POST["convertTemp"])) {
			echo $_POST["convertTemp"]." °C = ";
			convCtoF($_POST["convertTemp"]);
			echo " °F";
		}
		elseif($_POST["convertTemp"] != "") {
			echo "Invalid input.";
		}
	?>
	<br><br>nummer deel baar door 3: <input type="text" name="checkNum">
	<?php
		if ($_POST["checkNum"] != "" && is_numeric($_POST["checkNum"])) {
			echo "Input: ".$_POST["checkNum"]."; Output: ".isDivisibleBy3($_POST["checkNum"]);
		}
		elseif($_POST["checkNum"] != "") {
			echo "Invalid input.";
		}
	?>
	<br><br>typ een tekst: <input type="text" name="mirrorString">
	<?php
		if ($_POST["mirrorString"] != "") {
			echo "Input: ".$_POST["mirrorString"]."; Output: ".mirrorString($_POST["mirrorString"]);
		}
	?>
	<input type="submit" style="display: none;">
</form>
    <?php include('footer.php'); ?>