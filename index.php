<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../css/general.css">
    <!--<link rel="stylesheet" href="../css/index.css">-->
    <link rel="stylesheet" href="../../css/pages.css">
    <link rel="stylesheet" href="../../css/minesweeper.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css"
          integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/x-icon" href="../../favicon.ico"/>
    <!--Used from https://fontawesome.com under license https://fontawesome.com/license-->
    <title>Games - Minesweeper</title>


</head>

<header class="title-box">
    <div class="nav-bar">
        <div class="links-bar">
            <a href="../../" class="nav-home nav-button">Home</a>
            <a href="../" class="nav-link nav-button">Projects</a>
            <!--<a href="" class="nav-link nav-button">Blog</a>
            <a href="" class="nav-link nav-button">Donate</a>
            <a href="" class="nav-link nav-button">Contact</a>-->
        </div>
        <?php
        $socialBarResponse = file_get_contents("../../../hidden/social-bar.html");
        echo $socialBarResponse;
        ?>
    </div>

    <h1 class="title">
        Minesweeper
    </h1>
    <h2 class="sub-heading">
        Release v1.0.1
    </h2>
</header>

<body>
<div class="page-chunk" style="background-color: whitesmoke">
    <div class="levels">
        <button onclick="setDifficulty(0)">Beginner</button>
        <button onclick="setDifficulty(1)">Intermediate</button>
        <button onclick="setDifficulty(2)">Difficult</button>
    </div>
</div>
<div class="page-chunk canvasContainer">
    <div class="score-info">
        <p class="timer" id="timer">Time: 0m 0s</p>
        <div class="horizontal-row">
            <p class="score-item" id="totalMines">Total Mines:</p>
            <p class="score-item" id="minesFlagged">Mines Flagged:</p>
        </div>
        <p class="score-item" id="winMessage"></p>
    </div>
    <canvas id="gameCanvas" width="600" height="600"></canvas>
    <script src="minesweeper.js"></script>
</div>
</body>
</html>
