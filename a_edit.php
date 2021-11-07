<?php
session_start();
mysql_connect('localhost','root','');
mysql_select_db('latihan');
$id=$_GET['id'];
$query= mysql_query("select * from coba where id='$id'");
?>
<form action="a_updet.php" method='post'>
    <input type="hidden" name="id" value="<?php echo $_SESSION['id'];?>">
    <input type="text" name="nama" value="<?php echo $_SESSION['nama'];?>">
    <input type="password" name="password" value="<?php echo $_SESSION['password'];?>">
    <button type="submit">SEND</button>
</form>