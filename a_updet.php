<?php
session_start();
mysql_connect('localhost','root','');
mysql_select_db('latihan');
$nama=$_POST['nama'];
$pass=md5($_POST['password']);
$id=$_POST['id'];
$query= mysql_query("update coba set nama='$nama', password='$pass' where id='$id'");
if($query)
{
    echo"berhasi";
    echo"<a href='a_logout.php'>out</a>";
}else{
    
    echo"gagal";
    echo"<a href='a_logout.php'>out</a>";
}
?>