<!DOCTYPE HTML>
<html>
    <meta charset="utf-8">
    <head>
        <title> Buku Tamu Operasi File</title>
    <style>
        *{
            margin:0;
            padding: 0;
        }
        body{
            margin: 0 auto;
            background-color:darkseagreen;
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
            background-image: url(images/24.jpg);
            background-position: center;
            text-align: center;
            border-radius: 500px 500px 0px 0px;
        }
        .container{
            margin-left: -300px;
        }
        .gambar1{
            width: 130px;
            height: 130px;
            border-radius: 50%;
            background-image: url(images/4.jpg);
            background-position:center;
            border: solid 3px white;
            margin-left: 610px;
            margin-top: -600px;
            font-family: "tahoma";
            font-size: 14px;
            color: white;
            text-align: center;
            position: absolute;
        }
        .gambar2{
            width: 130px;
            height: 130px;
            border-radius: 50%;
            background-image: url(images/2.jpg);
            background-position:bottom center;
            border: solid 3px white;
            margin-left: 680px;
            margin-top: -456px;
            font-family: "tahoma";
            font-size: 14px;
            color: white;
            text-align: center;
            position: absolute;
        }
        .gambar3{
            width: 130px;
            height: 130px;
            border-radius: 50%;
            background-image: url(images/18.jpg);
            background-position:bottom center;
            border: solid 3px white;
            margin-left: 680px;
            margin-top: -300px;
            font-family: "tahoma";
            font-size: 14px;
            color: white;
            text-align: center;
            position: absolute;
        }
        .gambar4{
            width: 130px;
            height: 130px;
            border-radius: 50%;
            background-image: url(images/3.jpg);
            background-position:right center;
            border: solid 3px white;
            margin-left: 620px;
            margin-top: -150px;
            font-family: "tahoma";
            font-size: 14px;
            color: white;
            text-align: center;
            position: absolute;
        }
        p{
            margin-top: 80px;
        }
        .kata{
            width: 400px;
            height: auto;
            font-family: "times new roman";
            font-size: 20px;
            color: white;
            margin-left: 900px;
            margin-top:-490px ;
            
        }
        .kata1{
            font-family: "wolf in the city";
            font-size: 80px;
            color: white;
        }
        .sama{
            width: 100px;
            height: 50px;
            background: #fff;
            border: 0px;
            font-family: "tahoma";
            color: darkseagreen;
            font-size: 15px;
            border-radius: 3px;
        }
        .sama:hover{
            background-color: darkseagreen;
            color: white;
            border:solid 1px white;
            transition: all 0.3s;
        }
        .copy{
            font-family: "tahoma";
            font-size: 12px;
            color: white;
            margin-top: -15px;
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
            <div class="datang">Selamat Datang</div>
            <form action="bukutamu2.php" method="post">
            <input type="text" name="nama" class="nama" placeholder="Your Name" required>
            <input type="text" name="email" class="email" placeholder="Your Email" required>
                <textarea class="komentar" name="komentar" placeholder="Your Comment" required></textarea>
            <button type="submit" class="submit">Kirim</button>
            <button type="reset" class="reset">Reset</button>
            </form></div></div>
        <div class="gambar1">
            <p>Easy to use</p>
        </div>
        <div class="gambar2">
            <p>More<br> Responsive</p>
        </div>
        <div class="gambar3">
            <p>Find Many <br>Friend</p>
        </div>
        <div class="gambar4">
            <p>More Fun</p>
        </div>
        <div class="kata">
            <p class="kata1">Terima Kasih</p>
            Sudah berkunjung di TamuOnline.com download aplikasinya di<br>
            <button type="button" class="sama">iTunes</button> 
            <button type="button" class="sama">Google Play</button>
        </div>
            </body>
</html>
