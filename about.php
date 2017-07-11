<style>.circular {
	width: 300px;
	height: 300px;
    opacity: .8;
	border-radius: 150px;
	-webkit-border-radius: 150px;
	-moz-border-radius: 150px;
	background: no-repeat;
	box-shadow: 0 0 8px rgba(0, 0, 0, .8);
	-webkit-box-shadow: 0 0 8px rgba(0, 0, 0, .8);
	-moz-box-shadow: 0 0 8px rgba(0, 0, 0, .8);
    background-position: center;
    
	}
.circular:hover  {
  border:2px solid red;
  box-shadow: 0 0 10px #333;
  opacity: 1;
  -webkit-box-shadow: 0 0 10px #333;
  -moz-box-shadow: 0 0 10px #333;
  -o-box-shadow: 0 0 10px #333;
  -ms-box-shadow: 0 0 10px #333;
}#overlay-back {
    position   : absolute;
    top        : 0;
    left       : 0;
    width      : 100%;
    height     : 100%;
    background : #000;
    opacity    : 0.6;
    filter     : alpha(opacity=60);
    z-index    : 5;
    display    : none;
}
    #overlay {
    position : absolute;
    top      : 0;
    left     : 0;
    width    : 100%;
    height   : 100%;
    z-index  : 10;
    display  : none;
} 
    .activepic {
  border:2px solid grey;
  box-shadow: 0 0 10px #333;
  opacity: 1;
  -webkit-box-shadow: 0 0 10px #333;
  -moz-box-shadow: 0 0 10px #333;
  -o-box-shadow: 0 0 10px #333;
  -ms-box-shadow: 0 0 10px #333;
}
</style>

<hr>
<div id="toadd">
    <button onclick="loadDoc('aboutall.php','toadd');" type="button" class="btn btn-primary active">Hosting team</button>
</div><hr>
  
<div class="row" style='background-color: rgba(0,0,0,0.3)'><script>

    function getCookie(c_name) {
        var i, x, y, ARRcookies = document.cookie.split(";");
        for (i = 0; i < ARRcookies.length; i++) {
            x = ARRcookies[i].substr(0, ARRcookies[i].indexOf("="));
            y = ARRcookies[i].substr(ARRcookies[i].indexOf("=") + 1);
            x = x.replace(/^\s+|\s+$/g, "");
            if (x == c_name) {
                return unescape(y);
            }
        }
    }

    function setCookie(c_name, value, exdays) {
        var exdate = new Date();
        exdate.setDate(exdate.getDate() + exdays);
        var c_value = escape(value) + ((exdays == null) ? "" : "; expires=" + exdate.toUTCString());
        document.cookie = c_name + "=" + c_value;
    }

    function load(who) {
        $('.dets div').removeClass('activepic');
        document.getElementById(who).setAttribute('class', 'circular activepic');

    }

</script></div></div>

