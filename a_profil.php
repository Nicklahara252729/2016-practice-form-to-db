<?php
session_start();
echo $_SESSION['nama']."<br>".$_SESSION['password'];
echo"<a href='a_edit.php?id=$_SESSION[id]'>edit</a>";
?>
<a href="a_masuk.php">back</a>