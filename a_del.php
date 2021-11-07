<?php
mysql_connect('localhost','root','');
mysql_select_db('latihan');
$id=$_GET['id'];
$query=mysql_query("delete from coba where id=$id");
header("location:a_show.php");
?>