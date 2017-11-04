function LoadArrow() {
  	var xhttp = new XMLHttpRequest();
  	xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     	document.getElementById("Arrow").innerHTML = this.responseText;
    	}
  	};
 	xhttp.open("GET", "Arrow.txt", true);
  	xhttp.send();
}	

function LoadCriminalMinds() {
  	var xhttp = new XMLHttpRequest();
  	xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     	document.getElementById("Criminal Minds").innerHTML = this.responseText;
    	}
	};
 	xhttp.open("GET", "CriminalMinds.txt", true);
  	xhttp.send();
}	

function LoadTheFlash() {
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
		document.getElementById("The Flash").innerHTML = this.responseText;
	    }
  	};
	xhttp.open("GET", "TheFlash.txt", true);
	xhttp.send();
}

function LoadInhumans() {
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
		document.getElementById("Inhumans").innerHTML = this.responseText;
	    }
  	};
	xhttp.open("GET", "Inhumans.txt", true);
	xhttp.send();
}	

function LoadTheGifted() {
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
		document.getElementById("The Gifted").innerHTML = this.responseText;
	    }
  	};
	xhttp.open("GET", "TheGifted.txt", true);
	xhttp.send();
}