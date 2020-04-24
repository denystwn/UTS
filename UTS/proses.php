<?php
ob_start();
$gPilihNW = $_POST['pilihNW'];
$gJP = $_POST['JP'];
$gJD=$_POST['JD'];
$gJS=$_POST['JS'];
$gJM=$_POST['JM'];
$gNO=$_POST['NO'];
$gNIM=$_POST['NIM'];
date_default_timezone_set('Asia/Jakarta');
$waktu = date("d-m-Y | H:i:sA");
$nf = "data.txt";
$fp = fopen($nf,"r+");
$data = fgets ($fp,50);
$comfile = file($nf);
rewind($fp);
fwrite($fp,
"<table width=500 align=center border=1>
<h3 align='center'>Data Pemantauan Covid19 wilayah $gPilihNW <br>
      Per $waktu <br>
      Nama : $gNO | NIM : $gNIM</h3>
      <tr>
        <th>Positif</th>
        <th>Dirawat</th>
        <th>Sembuh</th>
        <th>Meninggal</th>
      </tr>
      <tr>
        <td>$gJP</td>
        <td>$gJD</td>
        <td>$gJS</td>
        <td>$gJM</td>
      </tr>
</table><br>");
	for ($i=0;$i<999;$i++) {
  fwrite ($fp, $comfile[($i)]);
}
fclose ($fp);
if (isset($_POST['tombol_simpan'])) {
header ("location: index.php");
}
ob_flush();
//Author Deny Setiawan
?>
