<?php
mysql_connect('localhost','root','');
mysql_select_db('latihan');
$nama=$_POST['nama'];
$pass=md5($_POST['password']);
$query=mysql_query("insert into coba set nama='$nama', password='$pass'");
if($query)
{
    echo"berhasil";
    echo"<a href='a_login.php'>masuk</a>";
}else{
    echo"gagal";
    echo"<a href='a_login.php'>masuk</a>";
}
?>