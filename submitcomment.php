<?php
//if ($_POST["btn"]=="Kirim")
//{
$nama=$_POST['nama'];
$email=$_POST['email'];
$comment=$_POST['comment'];
//$date=$_POST['date'];
//$art_id=$_POST["art_id"];
//$art_url=$_POST["art_url"];
//if(empty($nama))
//$_POST["nama"]='anonymous';
//if(empty($comment))
//echo"<meta http-equiv='refresh'content='1;url=$art_url'>";
//die("komentar harus diisi");
//}
$host = "localhost";
$username = "root";
$password = "";
$database = "nicolahara";
$connect=mysql_connect($host, $username, $password);
$pilihdatabase = mysql_select_db($database,$connect);
//if($pilihdatabase)
//echo "Berhasil";
//echo "Tidak dapat connect ke database";
$insert="insert into 'komentar' ('nama','email','comment')
values('$nama','$comment','$email')";
$insert_query=mysql_query($insert,$connect);
//{
	//die('error:'.mysql_error());
//}
//echo"<meta http-equiv='refresh'content='0;url=$art_url'>";
?>