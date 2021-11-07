<?php include"header-menu.php"; ?>
<link href="CSS/conten.css" rel="stylesheet" type="text/css">
<div id="conten"><form action="sc.php" method="POST">
Nama :<br />
<input type="text" name="nama" /><br />
Email :<br />
<input type="text"  name="email" /><br />
Comment :<br />
<textarea cols="20" rows="5" name="comment"></textarea>
<input type="submit" name="kirim" value="kirim"/></form>
<?php include"pc.php"; ?><div/>
<?php include"footer.php"; ?>