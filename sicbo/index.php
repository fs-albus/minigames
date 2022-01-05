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
    <title>Sicbo</title>

  </head>
  
  <body>
    <script>
      document.body.onkeyup = function(e){
    if(e.keyCode == 32){
      roll(probabilities);
    }
}
    </script>
    <div class="fill d-flex justify-content-center align-items-center">
        <div class="d-flex flex-column justify-content-center align-items-center" style="height: 280px; width: 600px;">
        <div class="container" >
            <div class="row justify-content-md-center">

                <div class="col d-flex justify-content-center" id="dice-1"></div>
                <div class="col d-flex justify-content-center" id="dice-2"></div>
                <div class="col d-flex justify-content-center" id="dice-3"></div>
    
            </div>
        </div>

        <div style="height: 32px"></div>
        
        <div class="container display-4 text-center">
          PRESS SPACE BAR TO ROLL
        </div>
        </div>
    </div>

    <div id="card"></div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="script.js"></script>
  </body>
</html>