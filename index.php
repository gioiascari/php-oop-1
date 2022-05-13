<?php
      include_once __DIR__ . '/movie.php'
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- /Bootstrap -->
    <link rel="stylesheet" href="css/style.css">
    <title>PhP OOP</title>
</head>
<body>
    <div class="container">
        
        <div class="row">
            <div class="col-12 text-center">
                <div class="text-container">
                    <h2>MOVIES</h2>
                </div>
            </div>
        </div>
        <div class="row">
        <?php 
                foreach ($movies as $movie) : ?>
            <div class="col-4">
                
           
                <div class="movies">
                    <span>Title: </span> <h3>
                        <?= $movie -> getTitle(); ?>
                    </h3>
                    <span>Director: </span> <h4>
                        <?= $movie -> director; ?>
                    </h4>
                    <span>Year </span><h4>
                        <?= $movie -> year; ?>
                    </h4>
                    <span>Genre: </span><h4>
                        <?= $movie -> genre; ?>
                    </h4>
                </div>
            </div>
            <?php endforeach; ?>        
            </div>
        </div>

    </div>
    
    
</body>
</html>




        
        