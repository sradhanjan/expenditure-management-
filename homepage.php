<!DOCTYPE html>
<html>
<head>
	<title>Savings Manager</title>
</head>
<style>
body
{
	background-color: black;
	background:url(save.jpg);
	background-repeat: no-repeat;
	background-position: top;
	background-attachment: fixed;
	background-size: 1550px 760px;
	overflow: hidden;
}
div
{
	margin: 300px;
	color: yellow;
	font-family: sans-serif;
	font-size: 20px;
	width:  300px;
	height: 60px;
	border-radius: 20px;
}
a
{
	color: white;
	font-family: cursive;
	font-size: 50px;
}
span1
{
	color: black;
	font-size: 40px;
	
}
</style>
<body>
<h1>
  <a href="" class="typewrite" data-period="2000" data-type='[ "Hey", "I am Akshay", "Senior Wordpress Developer"]'>
    <span class="wrap"></span>
  </a>
</h1>
<div>
<button><a href="form.php"><span1>Get Started</a></span1></button><br><br>
<button><a href="tips.php"><span1>Savings Tips</a></span1></button>
</div>
</body>
<script>
	var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) { delta /= 2; }

        if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
        }

        setTimeout(function() {
        that.tick();
        }, delta);
    };

    window.onload = function() {
        var elements = document.getElementsByClassName('typewrite');
        for (var i=0; i<elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
              new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid white}";
        document.body.appendChild(css);
    };
</script>
</html>