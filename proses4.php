<?php
$jumlah_terpilih = count($_POST['lulus']);
for ($x=0;$x<=$jumlah_terpilih;$x++)
{
	echo "<br>";
echo $_POST['lulus'][$x];
}
?>