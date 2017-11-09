//Function to define the structure of the Cell
var Cell = function(x,y, _cells){
	var game = this;

	game.isAlive = false;
	game.x = x;
	game.y = y;
	game.distance = function(cell){
		return Math.abs(cell.x - game.x) + Math.abs(cell.y - game.y);
	};

	game.neighbors = null;	

	game.countNeighbors = function(){
		return game.neighbors.filter(function(cell){
			return cell.isAlive;
		}).length;
	};

	return game;
};


var Grid = function(width, height){
	var game = this;
	var _cells = new Array(width*height);

	var _living = [];


	//place cells
	for(var i = 0; i < width; i++){
		for(var j = 0; j < height; j++){
			(function(){
				_cells[i+j*width] = new Cell(i, j, _cells);
			})();			
		}
	}

	//give neighbors
	_cells.forEach(function(cell){
		cell.neighbors = _cells.filter(function(cell2){
			var dx = Math.abs(cell2.x - cell.x);
			var dy = Math.abs(cell2.y - cell.y);
			return (dx === 1 && dy === 1 ) || (dx === 1 && dy === 0) || (dx === 0 && dy === 1);
		});
	});


	game.filter = function(fcn){
		return _cells.filter(fcn);
	};

	//Updateing the Canvas upon the 4 rules of the game
	game.updateLiving = function(){
		
		
		//Cell will die if the neighbors > 3 due to overcrowding
		var deadOvercrowded = _cells.filter(function(cell){
			return cell.isAlive && (cell.countNeighbors() > 3);
		});

		//Cell will die if the neighbors < 2 due to undercrowding
		var deadUnderpop = _cells.filter(function(cell){
			return cell.isAlive && (cell.countNeighbors() < 2);
		})

		

		//Reproducing cells when there are 3 neighbors around a nonliving cell
		var reproduction = _cells.filter(function(cell){
			return !cell.isAlive && cell.countNeighbors() === 3;
		});

		//Cell lives on if there are 2 || 3 living neighbors around the living cell
		var livesOn = _cells.filter(function(cell){
			return cell.isAlive && (cell.countNeighbors() === 2 || cell.countNeighbors() === 3);
		});

		//for loop to kill all the cells from over and under population
		deadOvercrowded.concat(deadUnderpop).forEach(function(cell){
			cell.isAlive = false;
		});

		//cells will come alive 
		reproduction.forEach(function(cell){
			cell.isAlive = true;
		});
		//cells will live on
		livesOn.forEach(function(cell){
			cell.isAlive = true;
		});

	};

	game.getCell = function(x,y){
		return _cells[x+y*width];
	};

	return game;
}
