<form action="akses_mhscari.php" method="get">
	<label>Cari :</label>
	<input type="text" name="cari">
	<input type="submit" value="Cari">
</form>
<?php
error_reporting(0);
$cari = $_GET['cari'];
$url = "http://localhost/XAMPP_PWD/PWD10/getcarimhs.php?cari=".$cari;
$client = curl_init($url);
curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($client);
$result = json_decode($response); 
	foreach ($result as $r) {
	echo "<p>";
	echo "NIM : " . $r->nim . "<br />";	
	echo "Nama : " . $r->nama . "<br />";  
	echo "jenis kel : " . $r->jkel . "<br />"; 
	echo "Alamat : " . $r->alamat . "<br />"; 
	echo "Tgl Lahir : " . $r->tgllhr . "<br />"; 
	echo "</p>";
}
