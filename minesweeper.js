var cvs = document.getElementById("gameCanvas");
var ctx = cvs.getContext("2d");

var difficulty = 0;
var difficulties = [
    {gridSize: 8, mines: 10},
    {gridSize: 16, mines: 40},
    {gridSize: 24, mines: 99}
    ];
let selectedDifficultySettings = difficulties[difficulty];

let gridSquareSize = 10;
let gridSquareGap = 1;

window.onload = function () {
    ctx.fillStyle = "grey";
    ctx.fillRect(0,0,cvs.width, cvs.height);

    let gameGrid = new Grid(gridSquareSize, gridSquareGap, selectedDifficultySettings.gridSize, selectedDifficultySettings.mines);

};

class Grid {

    constructor (size, gap, width, mines){
        this.gridSquareSize = size;
        this.gridSquareGap = gap;
        this.gridWidth = width;
        this.numOfMines = mines;
        this.arrayOfGridSquares = [];
        createGrid();
    }

    createGrid() {
        for (let c = 0; c < this.gridWidth; c++) {
            this.arrayOfGridSquares[c] = [];
            for (let r = 0; r < this.gridWidth; r++) {
                this.arrayOfGridSquares[c][r] = {

                }
            }
        }
    }

}

function setDifficulty(d) {
            difficulty = d;
            selectedDifficultySettings = difficulties[difficulty];

}