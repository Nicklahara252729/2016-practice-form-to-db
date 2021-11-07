<style type="text/css">
.utama {
width: 15%;
margin: 0px 0%;
}
.bersih {
clear: both;
}
h1, p {
text-align: justify;
}
a, a:hover, a:link, a:active {
color: #000;
display: block;
text-decoration: none;
}
dl {
padding: 10px;
}
dl dt {
margin: 2px 0;
padding: 0px;
	border-top:solid 5px;
	border-bottom:solid 5px;
	color:#B00;
	font-family:"Lao UI";
	font-size:19px;
	font-weight:600;
}
dl dd {
overflow: hidden;
transition: height 1s ease;
-moz-transition: height 1s ease;
}
dl dd:not(:target) {
height: 0;
}
dl dd:target {
height: 20em;
}
dl a.ie:hover dd, dl a.ie:focus dd {
height: auto;
color: #fcf !important;
}
#dua{
	width:25px;
	height:25px;
	float:left;
	margin-top:0px;
	margin-right:55px;
}
#tiga{
	width:30px;
	height:30px;
	float:left;
	margin-top:-1px;
	margin-right:55px;
}

</style>
<article class="utama">
<dl>
<dt><img src="Image/9.png" id="dua"/><a href="#satu">Web Design</a></dt>
<dd id="satu">
<?php include"submenu2.php";?></dd>
<dt><img src="Image/infoadmin.png" id="tiga"/><a href="#empat">Graphics Design</a></dt>
<dd id="empat"><?php include"submenu3.php";?>
</dd>
</dl>
</article>
