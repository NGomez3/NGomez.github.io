var box1 = document.getElementById("expand1");
var box2 = document.getElementById("expand2");
var box3 = document.getElementById("expand3");
var box4 = document.getElementById("expand4");

var collapse1 = document.getElementById("collapse1");
var collapse2 = document.getElementById("collapse2");
var collapse3 = document.getElementById("collapse3");
var collapse4 = document.getElementById("collapse4");

box1.addEventListener("click", function(){
	collapse1.classList.toggle('active');
});

box2.addEventListener("click", function(){
	collapse2.classList.toggle('active');
});

box3.addEventListener("click", function(){
	collapse3.classList.toggle('active');
});

box4.addEventListener("click", function(){
	collapse4.classList.toggle('active');
});


$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

	// Make sure this.hash has a value before overriding default behavior
	if (this.hash !== "") {
	  // Prevent default anchor click behavior
	  event.preventDefault();

	  // Store hash
	  var hash = this.hash;

	  // Using jQuery's animate() method to add smooth page scroll
	  // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
	  $('html, body').animate({
		scrollTop: $(hash).offset().top
	  }, 500, function(){
   
		// Add hash (#) to URL when done scrolling (default click behavior)
		window.location.hash = hash;
	  });
	} // End if
  });
});

// https://css-tricks.com/snippets/css/typewriter-effect/
var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 8) || 1000;
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
	css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
	document.body.appendChild(css);
};
