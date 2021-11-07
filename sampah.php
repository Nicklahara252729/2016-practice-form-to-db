<fieldset>
            <legend>Form Input Buku Tamu</legend>
            <form name="form1" method="post" action="bukutamu2.php">
                <table bordercolor="1" align="center">
                    <tr>
                        <td width="70">Nama</td>
                        <td width="447"><input type="text" name="nama" size="50"></td>
                    </tr>
                    <tr>
                        <td width="70">Email</td>
                        <td width="447"><input type="text" name="email" width="250" size="100"></td>
                    </tr>
                    <tr>
                        <td width="70">Komentar</td>
                        <td width="447"><textarea name="komentar" cols=14 rows="14"></textarea></td>
                    </tr>
                    <tr>
                        <td>
                            <input class="button" type="submit" name="submit" value="simpan">
                            <input class="button" type="submit" name="submit2" value="simpan">
                        </td>
                    </tr>
                </table>
            </form>
        </fieldset>
        textarea{
            color:white;
            background-color: #00ff99;
        }
        input{
            color: #000000;
            background: white;
            border-color: #ccffff;
            border-bottom-color: black;
            border-top: 0px solid;
            border-bottom: 2px double #99ff00;
            border-left: 0px solid;
            border-right: 0px solid;
            font-family: "tahoma,arial";
            font-size: 11px;
        }
        input.button{
            color: #000000;
            background-color: lightblue;
            border-color: blue;
            border-bottom-color: black;
            border-top: 1px;
            border-bottom: 1px;
            border-left: 1px;
            border-right: 1px;
            font-family: "verdana";
            font-size: 12px;
        }
        input.button.hover{
            color: #fff;
            background: #0c62a4;
            border: 2px outset #ffa20f;
            font-family: "calibri,times, serif";
            font-size: 14px;
            font-weight: bold;
        }

