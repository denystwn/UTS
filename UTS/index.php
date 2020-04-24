<html>
<head>
  <title>UTS</title>
</head>
<body>
  <h1 align="center"> UTS PEMOGRAMAN WEB 2 - DENY SETIAWAN(2016140542) - 06TPLM006</h1>
  <h2 align="left"> FORMULIR INPUT DATA PASIEN VIRUS COVID-19 </h2>
  <form action="proses.php" method="post" enctype="multipart/form-data" name="form1">
    <table border="0">
      <tr>
        <td>Nama Wilayah</td>
        <td>:</td>
        <td><select name="pilihNW"><option>DKI Jakarta</option><option>Jawa Barat</option><option>Banten</option><option>Jawa Tengah</option></select></td>
      </tr>
      <tr>
        <td>Jumlah Positif</td>
        <td>:</td>
        <td><input name="JP" type="text" /></td>
      </tr>
      <tr>
        <td>Jumlah Dirawat</td>
        <td>:</td>
        <td><input name="JD" type="text" /></td>
      </tr>
      <tr>
        <td>Jumlah Sembuh</td>
        <td>:</td>
        <td><input name="JS" type="text" /></td>
      </tr>
      <tr>
        <td>Jumlah Meninggal</td>
        <td>:</td>
        <td><input name="JM" type="text" /></td>
      </tr>
      <tr>
        <td>Nama Operator</td>
        <td>:</td>
        <td><input name="NO" type="text" /></td>
      </tr>
      <tr>
        <td>NIM Mahasiswa</td>
        <td>:</td>
        <td><input name="NIM" type="text" /></td>
      </tr>
      <tr>
        <td>
        <td>
      </tr>
      <tr>
        <td colspan="3"><div align="right">
          <input name="tombol_simpan" type="submit" value="Simpan"</div> <input type=reset value="Hapus Data">
        </td>
      </tr>
    </table>
    </form>
    <table align="center" border="1">

<?php
$file = "data.txt";
$fp = fopen($file,"r");
while (!feof($fp)) {
  $baca = fgets($fp);
  print("$baca");
}
fclose($fp);
?>
</body>
</html>
