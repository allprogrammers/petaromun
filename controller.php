<?php
	//controller
	
?>

<!--Force IE6 into quirks mode with this comment tag-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>EdWise Education</title>
<style type="text/css">
<style type="text/css">

<!--Menue Style Starts--> 
<style>

div.nav{
    position: relative;
    -webkit-perspective: 1000px;
    perspective: 1000px;

}

div.nav input{
    display: none;
}


div.nav label.mainlabel, div.nav div.menuflip{
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
		-webkit-transform-style: preserve-3d;
		transform-style: preserve-3d;
    -webkit-transition: all .3s ease-in-out;
    transition: all .3s ease-in-out; /* transition speed etc */
}


div.nav label.mainlabel{ /* menu anchor text style */
    width: 200px; /* width of anchor text */
    font: bold 20px Tahoma;
    position: relative;
    top: 0;
    display: block;
    padding-left: 34px; /* add left padding to make room for icon */
    cursor: pointer;
}

div.nav label.mainlabel:before{ /* menu anchor icon */
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    width: 12px;
    height: 12px;
    border:7px solid darkgreen;
    -webkit-box-shadow: inset 0 0 2px gray, 0 0 5px gray;
    box-shadow: inset 0 0 2px gray, 0 0 5px gray;
    border-radius: 30px;
}


div.nav div.menuflip{ /* DIV that flips over to reveal main menu */
    position: absolute;
    margin: 0;
    top: 0;
    padding: 4px;
    background: white;
    -webkit-transform: rotateY(180deg);
    transform: rotateY(180deg);
    width: 200px;
    border: 1px solid gray;
    -webkit-box-shadow: 2px 2px 15px #B5B5B5;
    box-shadow: 2px 2px 15px #B5B5B5;
    border-radius: 10px;
    background: #eee;
}


div.nav div.menuflip h4{
    margin: 0;
    margin-bottom: 4px;
    font-size: 20px;
    padding: 4px 0 0 6px;
}


div.nav div.menuflip ul{
    list-style: none;
    margin: 0;
    padding: 0;
}

div.nav div.menuflip ul li{
    border-bottom: 1px inset gray;
}

div.nav div.menuflip ul li:last-of-type{
    border-bottom: none;
}

div.nav div.menuflip ul li:hover{
    border-bottom-color: transparent;
}


div.nav div.menuflip ul li a{
    display: block;
    color: blue;
    text-decoration: none;
    padding: 6px;
    border-radius: 10px 0 10px;
    -webkit-transition: none;
    transition: none;
}


div.nav div.menuflip ul li a:hover{
    background: #515151;
    color: white;
}


div.nav div.menuflip label.close{ /* close button */
    position: absolute;
    right: 5px;
    top: 8px;
    padding-top: 1px;
    display: inline-block;
    text-align: center;
    line-height: 14px;
    color: white;
    z-index: 1000;
    cursor: pointer;
    border-radius: 50px;
    -webkit-box-shadow: 0 0 5px gray;
    box-shadow: 0 0 5px gray;
    width: 20px;
    height: 20px;
    background: black;
    font-size: 18px;
}

div.nav input:checked ~ label.mainlabel{
    -webkit-transform: rotateY(180deg);
    transform: rotateY(180deg);
}

div.nav input:checked ~ div.menuflip{
    -webkit-transform: rotateY(0);
    transform: rotateY(0);
}

</style>

<!--[if lte IE 9]>
	<style>
	
		div.nav div.menuflip{
			visibility: hidden;
		}
		div.nav input:checked ~ div.menuflip{
			visibility: visible;
		}
	
	</style>

<![endif]-->

<!--[if lte IE 8]>
	<style>
	
		div.nav label.mainlabel{
			padding-left: 0;
	}
	
		div.nav div.menuflip{
			displayz: none;
	}
	
	</style>


	<script>

	window.onload = function(){ // ie 8 menu compatibility code
		var mainlabel = document.getElementById('mainlabel_ie')
		var	menuflip = document.getElementById('menuflip_ie')
				menuflip.style.top = mainlabel.offsetHeight
				mainlabel.onmouseover = function(){
					menuflip.style.visibility = 'visible'
				}
				menuflip.onclick = function(){
					menuflip.style.visibility = 'hidden'
				}
	}

	</script>

<![endif]-->
<!--Menue Style end--> 
<style type="text/css">



body{
margin: 0;
padding: 0;
border: 0;
overflow: hidden;
height: 100%; 
max-height: 100%; 
}

#framecontentLeft, #framecontentTop{
position: absolute; 
top: 0; 
left: 0; 
width: 200px; /*Width of left frame div*/
height: 100%;
overflow: hidden; /*Disable scrollbars. Set to "scroll" to enable*/
background-color: white;
color: white;
}

#framecontentTop{ 
left: 200px; /*Set left value to WidthOfLeftFrameDiv*/
right: 0;
width: auto;
height: 120px; /*Height of top frame div*/
overflow: hidden; /*Disable scrollbars. Set to "scroll" to enable*/
background-color: white;
color: navy;
}

#maincontent{
position: fixed; 
left: 200px; /*Set left value to WidthOfLeftFrameDiv*/
top: 120px; /*Set top value to HeightOfTopFrameDiv*/
right: 0;
bottom: 0;
overflow: auto; 
background: white;
}

.innertube{
margin: 15px; /*Margins for inner DIV inside each DIV (to provide padding)*/
}

* html body{ /*IE6 hack*/
padding: 120px 0 0 200px; /*Set value to (HeightOfTopFrameDiv 0 0 WidthOfLeftFrameDiv)*/
}

* html #maincontent{ /*IE6 hack*/
height: 100%; 
width: 100%; 
}

* html #framecontentTop{ /*IE6 hack*/
width: 100%;
}

</style>


</head>

<body>

<div id="framecontentLeft">
<div class="innertube">
<img width="120" height="70" src = "logo.jpg">


<p style="text-align: center">Credits: <a href="http://#"><br>Abu Ammar<br>Ghulam Ali <br>(Digital Solutions)</a></p>

</div>
</div>

<div id="framecontentTop">
<div class="innertube">
<br><h1>Office Managment System</h1>

</div>
</div>


<div id="maincontent">

<div class="innertube">
<hr>

<!--Menue Style Starts Students--> 
<div class="nav">

<input type="checkbox" id="togglebox" />
<label for="togglebox" class="mainlabel" id="mainlabel_ie">Click Here</label>

<div class="menuflip" id="menuflip_ie">
<h4>Select</h4>
<ul>
<li><a href="student_entry.php">Students</a></li>
<li><a href="account">Accounts</a></li>
<li><a href="http://#">Employee</a></li>
<li><a href="http://#">Partners</a></li>
<li><a href="http://#">Sub-Agents</a></li>
<li><a href="http://search_record.php">Search</a></li>
</ul>
<label for="togglebox" class="close">x</label>
</div>

</div>
<!--Menue Style End - Students--> 


</div>

</div>


