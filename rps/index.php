<?php include("backend.php") ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>RPS</title>

  </head>
  
  <body>
  <form id="my-form">

<input type="radio" id="rock-rock" name="rock-paper-scissors">
<input type="radio" id="rock-paper" name="rock-paper-scissors">
<input type="radio" id="rock-scissors" name="rock-paper-scissors">
<input type="radio" id="paper-rock" name="rock-paper-scissors">
<input type="radio" id="paper-paper" name="rock-paper-scissors">
<input type="radio" id="paper-scissors" name="rock-paper-scissors">
<input type="radio" id="scissors-rock" name="rock-paper-scissors">
<input type="radio" id="scissors-paper" name="rock-paper-scissors">
<input type="radio" id="scissors-scissors" name="rock-paper-scissors">

<div>
  <h1><strong>ROCK PAPER SCISSORS</strong></h1>
  
  <div id="hands">
  <span class="text-white">BOT</span>
    <div class="hand" id="computer-hand">
      
      <div class="fist"></div>
      <div class="finger finger-1"></div>
      <div class="finger finger-2"></div>
      <div class="finger finger-3"></div>
      <div class="finger finger-4"></div>
      <div class="thumb"></div>
      <div class="arm"></div>
    </div>

    <div class="hand" id="user-hand">
      <div class="fist"></div>
      <div class="finger finger-1"></div>
      <div class="finger finger-2"></div>
      <div class="finger finger-3"></div>
      <div class="finger finger-4"></div>
      <div class="thumb"></div>
      <div class="arm"></div>
    </div>
    
    <div id="icons">
      <div id="rock-btn">
      <button onclick="play('rock')"><label>✊</label></button>
      </div>
      <div id="paper-btn">
      <button onclick="play('paper')"><label>🖐️</label></button>
      </div>
      <div id="scissors-btn">
        <button onclick="play('scissors')"><label>✌</label></button>
      </div>
    </div>
  </div>
</div>
  </form>


  <script src="script.js"></script>

  </body>
</html>