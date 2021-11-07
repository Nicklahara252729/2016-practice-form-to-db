<!DOCTYPE HTML>
<html>
<head>
    <title>Registrasi Peserta</title>
</head>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body{
            background-color:#caeb9f;
            margin: 0 auto;
        }
        .atas{
            font-family: "wolf in the city";
            font-size: 50px;
            color: darkseagreen;
            text-align: center;
        }
        .form{
            width: 400px;
            background-color: white;
            height: 500px;
            margin: 0 auto;
            border: solid 1px lightgray;
            margin-top: 20px;
            font-family: "tahoma";
            font-size: 15px;
            color: gray;
            box-shadow: 5px 5px 0px 0px #f4f4f4;
        }
        .nama{
            width: 350px;
            height: 30px;
            border: 0px;
            border-bottom: solid 1px lightgray;
            font-family: "tahoma";
            font-size: 13px;
            margin-bottom: 10px;
            margin-left: 20px;
            margin-top: 10px;
        }
        .alamat{
            width: 350px;
            height: 30px;
            border: 0px;
            border-bottom: solid 1px lightgray;
            font-family: "tahoma";
            font-size: 13px;
            margin-bottom: 10px;
            margin-left: 20px;
        }
        .tempat{
            width: 350px;
            height: 30px;
            border: 0px;
            border-bottom: solid 1px lightgray;
            font-family: "tahoma";
            font-size: 13px;
            margin-bottom: 10px;
            margin-left: 20px;
        }
        .tgl{
            width: 70px;
            height: 25px;
            font-family: "tahoma";
            font-size: 13px;
            border: 0px;
            margin-left: 20px;
            text-align: center;
            
        }
        .bulan{
            width: 110px;
            height: 25px;
            font-family: "tahoma";
            font-size: 13px;
            text-align: center;
            border: 0px;
            margin-left: 10px;
           
        }
        .tahun{
            width: 80px;
            height: 25px;
            font-family: "tahoma";
            font-size: 13px;
            border: 0px;
            text-align: center;
            margin-left: 10px;
            
        }
        .radio{
             margin-left: 20px;
            margin-top: 20px;
        }
        .radio2{
            margin-left: 50px;
        }
        .komentar{
            width: 350px;
            height: 100px;
            border: 0px;
            box-shadow: 0px 0px 2px 0px darkseagreen;;
            font-family: "tahoma";
            font-size: 13px;
            margin-bottom: 10px;
            margin-left: 20px;
            margin-top: 20px;
            color: gray;
        }
        .kirim{
            width: 350px;
            height: 40px;
            border:solid 1px lightgray;
            font-family: "tahoma";
            font-size: 15px;
            margin-left: 20px;
            background-color: white;
            color: darkseagreen;
        }
        .kirim:hover{
            background-color: darkseagreen;
            color: white;
            transition: all 0.3s;
        }
        .reset{
           width: 350px;
            height: 40px;
            border:solid 1px lightgray;
            font-family: "tahoma";
            font-size: 15px;
            margin-left: 20px;
            background-color: white;
            color: darkseagreen;
            margin-top: 10px;
        }
        .reset:hover{
            background-color: darkseagreen;
            color: white;
            transition: all 0.3s;
        }
    </style>
<body>
    <div class="form">
        <p class="atas">Registrasi Peserta Seminar</p>
    <form action="b-proses.php" method="post">
        <input type="text" name="nama" class="nama" placeholder="Nama Lengkap" required>
        <input type="text" name="alamat" class="alamat" placeholder="Alamat Lengkap" required>    
        <input type="text" name="tempat" class="tempat" placeholder="Tempat Lahir" required>
        <select name="tgl" class="tgl">
<?php
for($t=1;$t<=31;$t++)
{
echo"<option value='".$t."'>".$t."</option>";
}?>
</select>
        <select name="bulan" class="bulan">
<?php
for($b=1;$b<=12;$b++)
{
echo "<option value='$b'>$b</option>";
}?>
</select>
        <select name="tahun" class="tahun">
<?php
for($b=1950;$b<=1980;$b++)
{
echo "<option value='$b'>$b</option>";
}?>
</select><br>
        <input type="radio" name="sex" value="L" class="radio">Laki - Laki
        <input type="radio" name="sex" value="P" class="radio2">Perempuan
        <textarea name="komentar" class="komentar" placeholder="Tahu Informasi Seminar dari Mana ?"></textarea>
        <button type="submit" class="kirim">Submit</button>
        <button type="reset" class="reset">Reset</button>
    </form>
        </div>
</body>
</html>