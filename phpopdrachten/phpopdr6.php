<?php include('header.php') ?>
		<style>
			body {
				margin-top: 50px;
				text-align: center;
				font: 2vw "Arial";
			}
			h1 {
				font: bold 3vw "Arial";
			}
			form, select, input, button {
				margin: 5px;
				font: 1vw "Arial";
				text-align: center;
			}
			table {
				margin: 50px auto;
                border-collapse: collapse;
			}
            th, td {
                border: 1px solid black;
            }
			th {
				text-decoration: underline;
				padding: 10px 30px;
			}
			td {
				padding: 5px 20px;
			}
		</style>
		<?php
            for ($i = 0; $i < 33; $i++) {
                $kappersagenda[(($i-$i%4)/4+10).":".sprintf("%02d", $i%4*15)] = array("tijd" => (($i-$i%4)/4+10).":".sprintf("%02d", $i%4*15), "klantnaam" => $_POST['array'][$i]);
            }
            
			if ($_POST['time'] != null) {
				$kappersagenda[$_POST['time']]["klantnaam"] = $_POST['name'];
			}
		?>
		
		<!-- FORMULIER -->
		<h1>Maak een afspraak:</h1>
		<form id="form" action="phpopdr6.php" method="post">
			De volgende momenten zijn nog beschikbaar:
			<select name="time">
				<?php
					foreach($kappersagenda as $afspraak) {
						if($afspraak["klantnaam"] == "") {
							print("<option>".$afspraak["tijd"]."</option>");
						}
                        else {
                            print("<option disabled>".$afspraak["tijd"]."</option>");
                        }
					}
				?>
			</select>
			<br>
			<input type="text" name="name" placeholder="Voor- en achternaam">
			<br>
			<button type="submit" name="submit">Submit</button>
			<?php
				foreach($kappersagenda as $afspraak) {
					echo "<input type='hidden' name='array[]' value='".$afspraak["klantnaam"]."'>";
				}
			?>
		</form>
		
		<!-- OVERZICHT -->
		<?php
			echo("<table>");
				echo "<tr><th>Tijdstip</th><th>Klantnaam</th></tr>";
				foreach($kappersagenda as $afspraak) {
					if ($afspraak["klantnaam"] == "") {
						echo "<tr><td>".$afspraak["tijd"]."</td></tr>";
					}
					else {
						echo("<tr><td>".$afspraak["tijd"]."</td><td>".$afspraak["klantnaam"]."</td></tr>");
					}
				}
			echo("</table>");
		?>
<?php include('footer.php'); ?>

