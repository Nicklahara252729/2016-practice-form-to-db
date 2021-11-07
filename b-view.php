<!DOCTYPE HTML>
<html>
    <meta charset="utf-8">
    <head>
        <title>View</title>
        <style>
            .tab{
                font-family: "tahoma";
                font-size: 13px;
            }
            td{
                border: solid 1px;
                
            }
        </style>
    </head>
    <body>
        <table class="tab">
        <tr>
            <td>Nama Peserta</td>
            <td>Tanggal Lahir</td>
            <td>Tempat</td>
            <td>Jenis Kelamin</td>
            <td>Alamat</td>
            <td>Tanggal Daftar</td>
            <td>Informasi</td></tr>
        <?php
        mysql_connect('localhost','root','');
        mysql_select_db('mahasiswa');
        $query=mysql_query("SELECT * from peserta");
        
        while ($u=mysql_fetch_array($query))
        {
            echo"<tr>
            <td>$u[nama]</td>
            <td>$u[tgl_lahir]</td>
            <td>$u[tmpt_lahir]</td>
            <td>$u[sex]</td>
            <td>$u[alamat]</td>
            <td>$u[tgl_daftar]</td>
            <td>$u[informasi]</td>
            </tr>";
         
        }
        ?>
        </table>
    </body>
</html>