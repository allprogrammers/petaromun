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
                <li><a href="index.php?view=1">About</a></li>
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

	
	<script>var url = window.location;
// Will only work if string in href matches with location
$('ul.nav a[href="'+ url +'"]').parent().addClass('active');

// Will also work for relative and absolute hrefs
$('ul.nav a').filter(function() {
    return this.href == url;
}).parent().addClass('active');</script>
<style>.row {font-family: headingfont;color: #b6ff00}</style>


<div class="container" style="width: 100%;margin-top: 10px;">

  <div class="row" style='background-color: rgba(0,0,0,0.3)'>