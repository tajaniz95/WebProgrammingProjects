function game_start(){

var App = function(targetElementId, canvasWidth, canvasHeight, sqX, sqY){

	var game = this;
	// Grab the canvas
	game.canvas = document.getElementById(targetElementId);
	game.ctx = game.canvas.getContext("2d");

	// Grab the start button
	game.button = document.getElementById("start");

	// Initialize page styles
	var body = document.getElementsByTagName('body')[0];
	body.style.margin = '0px';
	body.style.overflow = "hidden";

	// Set height and width to window inner height
	canvasWidth = game.canvas.width = window.innerWidth ;//canvasWidth || 600;
  	canvasHeight = game.canvas.height = window.innerHeight ;//canvasHeight || 600;

  	sqX = sqX || 20;
  	sqY = sqY || 20;

  	var _squareWidth = game.canvas.width/sqX;
  	var _squareHeight = _squareWidth;//game.canvas.height/sqY;

  	var grid = new Grid(sqX, sqY);


  	// Handle Click events
	var _click = false;
	var handleClick = function(event){
		var x = event.pageX - game.canvas.offsetLeft;
		var y = event.pageY - game.canvas.offsetTop;
		
		var i = Math.floor(x/_squareWidth);
		var j = Math.floor(y/_squareHeight);

		grid.getCell(i, j).isAlive = true;
		return;
	};

	var Simulation = false;


	function update23(){
		for(var i = 0; i<23; i++){
			game.update();
		}
		Simulation = false;
	}

	function update1(){
		for(var i = 0; i<1; i++){
			game.update();
		}
		Simulation = false;
	}

	window.onkeydown = function(ev){
		Simulation = !Simulation;
	};

	window.onresize = function(ev){
		canvasWidth = game.canvas.width = window.innerWidth;//canvasWidth || 600;
  		canvasHeight = game.canvas.height = window.innerHeight;//canvasHeight || 600;
	};

	game.canvas.addEventListener('mousedown', function(event){
		_click = true;
		handleClick(event);
		game.canvas.addEventListener('mousemove', handleClick);
	});

	game.canvas.addEventListener('mouseup', function(event){
		_click = false;
		game.canvas.removeEventListener('mousemove', handleClick);
	});

	game.start = function(){
		setInterval(function(){
			game.update();
			game.draw();
		}, 60);

	};

	game.update = function(){
		if(Simulation){
			grid.updateLiving();	
		}
	};

	game.draw = function(){
		// Erase previous draw
		game.ctx.fillStyle = 'white';
	 	game.ctx.fillRect(0,0,game.canvas.width,game.canvas.height);

	 	// Draw living squares
	 	grid.filter(function(cell){
	 		return cell.isAlive;
	 	}).forEach(function(cell){
	 		game.ctx.fillStyle = 'black';
	 		game.ctx.fillRect(cell.x * _squareWidth, cell.y * _squareHeight, _squareWidth, _squareHeight);
	 	});



	 	// Draw grid
	 	
	 	game.ctx.fillStyle = 'gray';
	 	for(var x = 0; x <= canvasWidth; x+=_squareWidth){
	 		game.ctx.beginPath();
	 		game.ctx.moveTo(x, 0);
	 		game.ctx.lineTo(x, canvasHeight);
	 		game.ctx.stroke();
	 	};

	 	for(var y = 0; y <= canvasHeight; y+= _squareHeight){
	 		game.ctx.beginPath();
	 		game.ctx.moveTo(0, y);
	 		game.ctx.lineTo(canvasWidth, y);
	 		game.ctx.stroke();	
	 	};
	};

	return game;
};

	var selected_size = document.getElementById("size").value;
	var app = new App("game", 10, 10, selected_size, selected_size);
	app.start();
}

function changeValue(){
	if(document.getElementById("random").value == "false"){
		document.getElementById("random").setAttribute("value", true);
		document.getElementById("random").innerHTML = "Stop";
	}
	else{
		document.getElementById("random").setAttribute("value", false);
		document.getElementById("random").innerHTML = "Run";
	}
}