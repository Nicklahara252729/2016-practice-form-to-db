<?php
if ($_POST['kirim'] == "insert")
{
echo "Proses Insert...";
}
else if ($_POST['kirim'] == "update")
{
echo "Proses Update...";
}
else
{
echo "Tidak ada proses...";
}
?>