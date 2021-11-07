<table>
    <tr>
        <td>no</td>
        <td>nama</td>
        <td>password</td>
        <td>delete</td>
    </tr>
    <?php
    mysql_connect('localhost','root','');
    mysql_select_db('latihan');
    $query=mysql_query("select * from coba");
    $no=1;
    while ($t= mysql_fetch_array($query))
    {
        echo"<tr> 
        <td>$no</td>
        <td>$t[nama]</td>
        <td>$t[password]</td>
        <td><a href='a_del.php?id=$t[id]'>delete</a></td>
        </tr>";
        $no++;
    }
    ?>
    <a href="a_login.php">OUT</a>
</table>