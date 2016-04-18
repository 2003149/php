<?php include('header.php') ?>
<?php
$leeftijd = $_GET["textfield"];
$prijs = 10;
if (isset($_GET["textfield"])){
	if($leeftijd >= 65){
		echo "bus kost nu ". $prijs/2 ."euro";
		
	}
	else {
		echo "bus kost 10euro";
	}
}
?>
<form action="phpopdr2.php">
voer uw leeftijd in<input type="text" name="textfield"><br>
				    <input type="submit" value="knop">
</form>
<?php include('footer.php'); ?>