<!DOCTYPE html>
<html>
<head>
	<title>Kalkulator Tegangan Listrik Rumah</title>
</head>
<body>
	<h2>Kalkulator Tegangan Listrik Rumah</h2>
	<form method="post" action="">
		<label>Jumlah Lampu:</label>
		<input type="number" name="lamp" value="0" /><br /><br />
		<label>Jumlah AC:</label>
		<input type="number" name="ac" value="0" /><br /><br />
		<label>Jumlah Kulkas:</label>
		<input type="number" name="kulkas" value="0" /><br /><br />
		<label>Jumlah Televisi:</label>
		<input type="number" name="tv" value="0" /><br /><br />
		<label>Jumlah Komputer:</label>
		<input type="number" name="komputer" value="0" /><br /><br />
		<input type="submit" name="submit" value="Hitung" />
	</form>

	<?php
		if(isset($_POST['submit'])){
			$lamp = $_POST['lamp'];
			$ac = $_POST['ac'];
			$kulkas = $_POST['kulkas'];
			$tv = $_POST['tv'];
			$komputer = $_POST['komputer'];

			$totalWatt = ($lamp*60) + ($ac*1500) + ($kulkas*250) + ($tv*70) + ($komputer*150);
			$totalVolt = $totalWatt/220;

			$tarifListrik = 1500; // tarif listrik per kWh
			$totalBiaya = ($totalWatt/1000) * $tarifListrik;

			echo "<br /><br />";
			echo "<h3>Hasil Perhitungan:</h3>";
			echo "Total Daya Listrik: " . $totalWatt . " Watt <br />";
			echo "Total Tegangan Listrik: " . round($totalVolt, 2) . " Volt <br />";
			echo "Total Biaya Listrik: Rp " . number_format($totalBiaya, 2, ',', '.') . " <br />";
		}
	?>
</body>
</html>
