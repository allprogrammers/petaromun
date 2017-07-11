<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title><?php echo"$title";?></title>
<link rel="stylesheet" href="./css/bootstrap.min.css">
<link rel="stylesheet" href="./css/bootstrap-theme.min.css">
<!--<link rel="stylesheet" href="./core.css">-->
<script src="./js/jquery.min.js"></script>
<script src="./js/bootstrap.min.js"></script>
    <script>
        function loadDoc(file, where) {
            $('#' + where).hide(1);
            
            var xhttp = new XMLHttpRequest();
            
            xhttp.onreadystatechange = function () {
                if (xhttp.readyState == 4 && xhttp.status == 200) {

                    document.getElementById(where).innerHTML = '';
                    document.getElementById(where).innerHTML = xhttp.responseText;

                    $('#' + where).show(1000);
                    
                }
            }
            xhttp.open("GET", file, true);
            xhttp.send();

        }</script>
<style type="text/css">

	@font-face {
		font-family: headingfont;
		src: url('./fonts/Aller_Bd.ttf');
	}
	.navbar {
	   background-color: transparent;
	   background: transparent;
	   border-color: transparent;
	}

	.navbar li { color: #000 }
    .bs-example{
    	
    }
	body{
		background-color:#cccccc;
        font-size: 16px;
	}

	.item img{
		opacity: 0.7;
	}
	.captin h2 {
	   position: absolute;
	   top: 50%;
	   text-align: center;
	   width: 100%;
	}
	.captin h2 span {
	   color: white;
	   font: bold 24px/45px Verdana, Sans-Serif;
	   letter-spacing: -1px;
	   background: rgb(0, 0, 0); /* fallback color */
	   background: rgba(0, 0, 0, 0.3);
	   padding: 10px;
	}
    input{max-width: 400px}
    select{max-width: 400px}
	.captin h2 span.spacer {
	   padding:0 5px;
	}
    font-size: 120%;
    
</style>
</head>
<body style='background-color: #1A1A1A;margin: auto;background-repeat: no-repeat;' >
<div class="bs-example"  >
    <div style="margin-left: 7.5%"><img src="1.jpg" style="width: 100px;height: 100px"></div>
    <nav role="navigation" class="navbar navbar-default" style="border: 0px;margin-bottom:0px" >
        <div style="max-width: 85%;margin: auto">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header" >
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a href="#" class="navbar-brand">PETARO-MUN</a>
        </div>
        <!-- Collection of nav links, forms, and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
				<li><a href="contact.php">Contact Us</a></li>
				<li><a href="reg.php">Register</a></li>
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">Delegates Lounge <b class="caret"></b></a>
                    <ul role="menu" class="dropdown-menu">
                        <li><a href="#">Resources</a></li>
                        <li><a href="#">Social Events</a></li>
                        <li><a href="#">Login</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Trash</a></li>
                    </ul>
                </li>
            </ul>
            <!--<form role="search" class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" placeholder="Search" class="form-control">
                </div>
            </form>-->
            <ul class="nav navbar-nav navbar-right">
                <li><a href="admin.php">Login</a></li>
            </ul>
        </div>
            </div>
    </nav>

	<div >
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-example-generic" data-slide-to="1"></li>
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner">
			<div class="item active">
			  <img src="./1.jpg" style='width:100%' alt="...">
			  <div class="captin">
				  <!--<h2><span>PETARO-MUN<span class='spacer'></span><br /><span class='spacer'></span>The most exciting ride of your life</span></h2>-->
				  <h2><span>The most exciting ride of your life</span></h2>

			  </div>
			</div>
			<div class="item">
			  <img src="./1.jpg" style='width:100%' alt="...">
			  <div class="carousel-caption">
				  <h2><button type="button" onclick="loadDoc('home.php','bout');" class="btn btn-primary active">About Us</button></h2>
			  </div>
			</div>
			<!-- <div class="item">
			  <img src="http://placehold.it/1200x315" alt="...">
			  <div class="carousel-caption">
				  <h3>Caption Text</h3>
			  </div>
			</div> -->
		  </div>

		  <!-- Controls -->
		  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
		  </a>
		  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
		  </a>
		</div> <!-- Carousel -->
	</div>
	<script>var url = window.location;
// Will only work if string in href matches with location
$('ul.nav a[href="'+ url +'"]').parent().addClass('active');

// Will also work for relative and absolute hrefs
$('ul.nav a').filter(function() {
    return this.href == url;
}).parent().addClass('active');</script>
<style>.row {font-family: headingfont;color: #b6ff00}</style>
<div class="container" style="width:100%;">

  <?php if($_GET['view']==1){require 'home.php';}?>
