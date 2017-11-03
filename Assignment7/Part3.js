function LoadFirst() {
  	var xhttp = new XMLHttpRequest();
  	xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     	document.getElementById("First").innerHTML = this.responseText;
    	}
  	};
 	xhttp.open("GET", "FirstInfo.txt", true);
  	xhttp.send();
}	

function LoadSecond() {
  	var xhttp = new XMLHttpRequest();
  	xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     	document.getElementById("Second").innerHTML = this.responseText;
    	}
	};
 	xhttp.open("GET", "SecondInfo.txt", true);
  	xhttp.send();
}	

function LoadThird() {
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
		document.getElementById("Third").innerHTML = this.responseText;
	    }
  	};
	xhttp.open("GET", "ThirdInfo.txt", true);
	xhttp.send();
}

function LoadFourth() {
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
		document.getElementById("Fourth").innerHTML = this.responseText;
	    }
  	};
	xhttp.open("GET", "FourthInfo.txt", true);
	xhttp.send();
}	

function LoadFifth() {
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
		document.getElementById("Fifth").innerHTML = this.responseText;
	    }
  	};
	xhttp.open("GET", "FifthInfo.txt", true);
	xhttp.send();
}