<html>
<head><title></title>
<style>
.circle{
	width:200px;
	height:200px;
	background-color:#b00;
	border-radius:50%;
}
body{
	bacground-color:#fff;
	padding:50px;
}
@keyframes slide{
	0%{
		transform:translate3d(0px, 0px, 0px);
	}
	50%{
		transform:translate3d(800px, 0px, 0px);
		opacity:.0;
	}
	100%{
		transform:translate3d(0px, 0px, 0px);
	}
}
#myCircle{
	animation: slide 5s infinite;
}
</style>
</head>
<body>
<div id="myCircle" class="circle"></div>
</body>
</html>