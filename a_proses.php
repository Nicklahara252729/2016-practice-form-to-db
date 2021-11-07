<?php
session_start();
mysql_connect('localhost','root','');
mysql_select_db('latihan');
$nama=$_POST['nama'];
$pass=md5($_POST['password']);
$query=mysql_query("select * from coba where nama='$nama' and password='$pass'");
$jumlah= mysql_num_rows($query);
if($jumlah>0)
{
    $r=mysql_fetch_array($query);
    $_SESSION['status']=true;
    $_SESSION['nama']=$r['nama'];
    $_SESSION['password']=$r['password'];
    $_SESSION['id']=$r['id'];
    header("location:a_masuk.php");
}else{
    header("location:a_login.php");
}
?>

