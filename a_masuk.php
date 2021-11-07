<?php
session_start();
if ($_SESSION['status']==false)
{
    header("location:a_logout.php");
}
?>
<h1>HI <?php echo"$_SESSION[nama]";?></h1>
<a href="a_profil.php">profil</a>
<a href="a_logout.php">OUT</a>