<!DOCTYPE HTML>
<html>
    <meta charset="utf-8">
    <head>
        <title>Buku Tamu 2</title>
        <style>
            *{
            margin:0;
            padding: 0;
        }
        body{
            margin: 0 auto;
            background-color:darkseagreen;
        }
            .menu{
            width: 100%;
            height: 30px;
            font-family: "wolf in the city";
            font-size: 50px;
            color: white;
        }
        .cari{
            width: 500px;
            height: 30px;
            border: 0px;
            border-radius: 3px;
            font-family: "tahoma";
            font-size: 12px;
        }
        .btncari{
            width: 100px;
            height: 30px;
            border: 0px;
            background-color: white;
            font-family: "tahoma";
            font-size: 14px;
            color: darkseagreen;
            border-radius: 3px;
        }
        .btncari:hover{
            background-color: whitesmoke;
            border-radius: 3px;
            transition: all 0.3s;
        }
        .fcari{
            margin-left: 300px;
            margin-top: -75px;
        }
        .dev{
            background-color: darkseagreen;
            width: 100px;
            height: 30px;
            font-family: "tahoma";
            font-size: 14px;
            color: white;
            border: 0px;
            margin-left: 100px;
        }
        .dev:hover{
            background-color: white;
            color: darkseagreen;
            border: 0px;
            transition: all 0.3s;
            border-radius: 3px;
        }
        .help{
            background-color: darkseagreen;
            width: 100px;
            height: 30px;
            font-family: "tahoma";
            font-size: 14px;
            color: white;
            border: 0px;
        }
        .help:hover{
            background-color: white;
            color: darkseagreen;
            border: 0px;
            transition: all 0.3s;
            border-radius: 3px;
        }
            .copy{
            font-family: "tahoma";
            font-size: 12px;
            color: white;
            margin-top: -15px;
        }
            .submit{
            width: 150px;
            height: 50px;
            border: 0px;
            font-family: "tahoma";
            font-size: 15px;
            color: darkseagreen;
            background-color: white;
            border-radius: 5px;
            box-shadow: 0px 0px 3px 0px darkseagreen;
            margin-top: 10px;
            margin-left: 140px;
        }
        .submit:hover{
            color: white;
            background-color: darkseagreen;
            transition: all 0.5s;
        }
        .reset{
            width: 150px;
            height: 50px;
            border: 0px;
            font-family: "tahoma";
            font-size: 15px;
            color: darkseagreen;
            background-color: white;
            border-radius: 5px;
            box-shadow: 0px 0px 3px 0px darkseagreen;
            margin-top: 10px;
            margin-left:5px;
        }
        .reset:hover{
            color: white;
            background-color: darkseagreen;
            transition: all 0.5s;
        }
        .datang{
            font-family:"wolf in the city";
            font-size: 60px;
            color: white;
            margin-left: 0px;
            padding-top: 230px;
            background-image: url(images/22.jpg);
            background-position: center;
            text-align: center;
            border-radius: 500px 500px 0px 0px;
        }
        .container{
            margin-left: 0px;
        }
            .form{
            width: 610px;
            height: 610px;
            background-color: white;
            margin-top: 50px;
            margin-left: 350px;
            border-radius: 50%;
        }
        .form1{
            width: 600px;
            height: 600px;
            background-color: darkseagreen;
            margin-top: -605px;
            margin-left: 354px;
            border-radius: 50%;
        }
        .form2{
            width: 590px;
            height: 590px;
            background-color: white;
            margin-top: -595px;
            margin-left: 359px;
            border-radius: 50%;
        }
        .nama{
            width:410px;
            height: 30px;
            border: 0px;
            box-shadow: 0px 0px 2px 0px darkseagreen;
            margin-left: 90px;
            margin-top: 0px;
            border-radius: 5px;
            font-family: "tahoma";
            font-size: 12px;
        }
        .email{
            width: 410px;
            height: 30px;
            border: 0px;
            box-shadow: 0px 0px 2px 0px darkseagreen;
            margin-left: 90px;
            margin-top: 10px;
            border-radius: 5px;
            font-family: "tahoma";
            font-size: 12px;
        }
        .komentar{
            width: 410px;
            height: 90px;
            border: 0px;
            box-shadow: 0px 0px 2px 0px darkseagreen;
            margin-left: 90px;
            margin-top: 10px;
            border-radius: 5px;
            font-family: "tahoma";
            font-size: 12px;
        }
        </style>
    </head>
    <body>
        <div class="menu">
            TamuOnline.com
            <p class="copy">&copy;nicolahara</p>
            <form action="#" method="post" class="fcari">
                <input type="text" class="cari" placeholder="Cari apa hayoo ?">
                <button type="submit" class="btncari">Cari</button>
                <button type="submit" class="dev">Developer</button>
                <button type="submit" class="help">Help</button>
                <button type="submit" class="help">More</button>
            </form>
        </div>
        <div class="container">
        <div class="form"></div>
        <div class="form1"></div>
        <div class="form2">
            <div class="datang">Ini Data yang Anda Simpan</div>
            
            <input type="text" name="nama" class="nama" placeholder="Your Name"  value="<?php 
        $nama=$_POST['nama'];
        echo $nama;
        ?>">
            <input type="text" name="email" class="email" placeholder="Your Email" value="<?php 
        $email=$_POST['email'];
        echo $nama;
        ?>">
                <textarea class="komentar" name="komentar" placeholder="Your Comment"><?php
            $komentar=$_POST['komentar'];
            echo $komentar;
            ?></textarea>
            <a href="bukutamu.php"><button type="submit" class="submit">Back</button></a>
            <?php
        $tanggal=date("d F Y, g:i:a");
        $file=fopen("bukutamu.txt",'a+');
        fwrite($file,"\nTanggal:".$tanggal."\n"."Nama:".$nama."\n"."Email:".$email."\n"."Komentar:".$komentar."\n"."");
        fclose($file);
        ?>
            <a href="http://localhost/projpsg2/bukutamu.txt"><button type="reset" class="reset">Lihat Tamu</button></a>
            </div></div>
        
        
    </body>
</html>