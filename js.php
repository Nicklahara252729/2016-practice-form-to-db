<html>
<head><title></title>
<script type='text/javascript' src='css/jquery-2.1.4.js'></script> 
<script>
$(document).ready(function(){
	$('#satu').click(function(){
		$('p').hide(2000);
	});
	$('#dua').click(function(){
		$('p').show(2000);
	});
	$('#tiga').click(function(){
		$('p').toggle(2000);
	});
	$('#empat').click(function(){
		$('p').stop();
	});
    $("h1").click(function(){
       $("h2").animate({
           "font-size":"hide",
           "width":"50%",
           "right":"100px"
       }, 1000, function(){
           $("h3").fadeOut(1000);
           $("h3").css("color","red");
       }); 
    });
});
</script>
<style>
#slide{
	float:left;
}
p{
	float:left;
}
</style>
</head>
<body>
<p> mencoba jquery pertama kkkkkkkkkk<br>
    mencoba jquery pertama kkkkkkkkkk<br>
    mencoba jquery pertama kkkkkkkkkk</p>
<div id="slide">
<button id="tiga">toggle</button>
<button id="satu">hide</button>
<button id="dua">show</button>

<button id="empat">stop</button></div><br>
    <h1>haaaaaaa satu</h1>
    <h2>haaaaaaa dua</h2>
    <h3>haaaaaaa tiga</h3>
</body>
</html>