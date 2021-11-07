<?php
mysql_connect('localhost','root','');
mysql_select_db('mahasiswa');
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$tempat=$_POST['tempat'];
$tgl=$_POST['tahun']."-".$_POST['bulan']."-".$_POST['tgl'];
$sex=$_POST['sex'];
$tgldaftar=date("Y-m-d");
$info=$_POST['komentar'];
$query= mysql_query("insert into peserta set nama='$nama', tgl_lahir='$tgl', tmpt_lahir='$tempat', sex='$sex', alamat='$alamat', tgl_daftar='$tgldaftar', informasi='$info'");
if($query)
{
    header("location:b-view.php");
}else{
    echo"gagal";
}
?>