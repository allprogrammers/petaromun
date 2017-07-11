<?php
	$text=$_GET['page'];
	include($text+"-title");
	require("header.php");
	$news='new.php';
?>

<div id='container' >

    <div id='nav'>
	    <div id='text-logo'>Petaro-MUN</div>
	    <div id='tabs'>
		    <ul id='tabs'>
			    <li>Home</li>
			    <li>Delegates Lounge</li>
			    <li>Register</li>
		    </ul>
	    </div>
    </div>
    <br>
    <div>&nbsp </div>
    <div id="bod">
        <div id='images'> <img src="2.jpg"> </div>
        <div id='page-content'><?php include($text+".php"); ?> hellowasdf&nbsp</div>
        <div id='news'><div>NEWS</div><?php include($news); ?>&nbsp asdfasdfasdf</div>
        <div id='copyright'>Programmers' Cafe ©&nbsp</div>
    </div>

</div>

<?php
	require("footer.php");
?>