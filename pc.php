<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$koneksi = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $koneksi )
{
  die('Gagal Koneksi: ' . mysql_error());
}
$sql = 'SELECT nama, email,comment FROM komentar';
 
mysql_select_db('nicolahara');
$ambildata = mysql_query( $sql, $koneksi);
if(! $ambildata )
{
  die('Gagal ambil data: ' . mysql_error());
}
while($row = mysql_fetch_array($ambildata, MYSQL_ASSOC))
{
    echo "NAMA  :{$row[nama]}  <br> ".
         "EMAIL: {$row[email]} <br> ".
         "COMMENT : {$row[comment]} <br> ".
         "--------------------------------<br>";
} 
echo "Berhasil ambil data\n";
mysql_close($koneksi);
?>