<style>
img { 
max-width: 100%; 
height: auto; 
} 
ul,ol { 
list-style-type: none; 
} 
.container { 
margin:10% auto; 
position: relative; 
overflow: hidden; 
} 
.container, ul.slide li img{ 
width:450px;  
height: 300px; 
}
ul.slide { 
position: absolute; 
display: block; 
width:300%;  
}
.caption { 
position: absolute; 
background-color: rgba(0,0,0,0.5); 
bottom:0; 
padding:10px; 
color:#fff; 
left: 0; 
right: 0; 
}
ul.slide li { 
display: inline-block; 
float: left; 
-webkit-box-sizing:border-box; 
-moz-box-sizing:border-box; 
ox-sizing:border-box; 
-webkit-transition: -webkit-transform ease-out; 
-moz-transition: -moz-transform 2000ms; 
transition: -webkit-transform 2000ms, transform 2000ms; 
} 
ul.slide li.slide-1 { 
left: 0%; 
} 
ul.slide li.slide-2 { 
left: 100%; 
}
ul.slide li.slide-3 { 
left: 200%; 
} 
#nav-1:checked ~ ul.slide li{ 
-webkit-transform: translateX(0%); 
-moz-transform: translateX(0%); 
transform: translateX(0%); 
} 
#nav-2:checked ~ ul.slide li{ 
-webkit-transform: translateX(-100%); 
-moz-transform: translateX(-100%); 
transform: translateX(-100%); 
} 
#nav-3:checked ~ ul.slide li { 
-webkit-transform: translateX(-200%); 
-moz-transform: translateX(-200%); 
transform: translateX(-200%); 
} 
.radio-nav { 
display: none; 
} 
.nav-arrow { 
position: absolute; 
top:45%; 
width:50px; 
height: 50px; 
} 
.nav-next { 
right:10px; 
} 
.nav-prev { 
left:10px; 
} 
.nav-arrow label 
{ 
-webkit-transition:all 0.3s; 
-moz-transition:all 0.3s; 
transition:all 0.3s; 
background-color: rgba(0,0,0,0.3); 
color: #fff; 
border-radius: 50%; 
display: block; 
position: absolute; 
padding:15px 20px; 
cursor: context-menu; 
z-index: 1; 
opacity: 0; 
font-weight: bold; 
line-height: 1; 
}
.container:hover .nav-arrow label{ 
background-color: rgba(0,0,0,0.7); 
}  
#nav-1:checked ~ .nav-prev label.nav-3, #nav-1:checked ~ .nav-next label.nav-2, #nav-2:checked ~ .nav-prev label.nav-1, #nav-2:checked ~ .nav-next label.nav-3, #nav-3:checked ~ .nav-prev label.nav-2, #nav-3:checked ~ .nav-next label.nav-1 { z-index: 2; opacity: 1; }
</style>
<div class="container"> 
<input type="radio" name="slide" class="radio-nav" id="nav-1" checked/> <input type="radio" name="slide" class="radio-nav" id="nav-2"/> 
<input type="radio" name="slide" class="radio-nav" id="nav-3"/>
<ul class="slide"> <li class="slide-1"> 
<img src="Image/C360_2015-05-15-09-46-36_org.jpg"/> 
<div class="caption">Berita 1</div> 
</li> 
<li class="slide-2"> <img src="Image/LOGO2.png"/> 
<div class="caption">Berita 2</div> 
</li> 
<li class="slide-3"> <img src="Image/LOGO2.png"/>
<div class="caption">Berita 3</div> 
</li> 
</ul><div class="nav-arrow nav-next"> 
<label class="nav-1" for="nav-1">></label> 
<label class="nav-2" for="nav-2">></label> 
<label class="nav-3" for="nav-3">></label> 
</div> 
<div class="nav-arrow nav-prev"> 
<label class="nav-1" for="nav-1"><</label> 
<label class="nav-2" for="nav-2"><</label> 
<label class="nav-3" for="nav-3"><</label> 
</div> 