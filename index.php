<?php
include __DIR__ . '/components/variables.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css">
    <title>Document</title>
</head>
<body class="container">
    <div class="text-center col-12">
        <h1 class=>
            Strong Password Generator
        </h1>
        <h2 style="color : white">
            Genera una password sicura
        </h2>
    </div>
    <div class="col-12 container2 row">
        <form method="GET" action="index.php">
            <div class="col-12 row">
                <div class="col-6">
                    <span>
                        Lunghezza caratteri password
                    </span>
                </div>
                <div class="col-6">
                    <input type="number" name='lunghezzaPassword' min="1" required>  
                </div>
            </div>
            <div class="col-12 row">
                <div class="col-6">
                    <label for="lettereRepeat">Lettere ripetetute</label>
                </div>
                <div class="col-6 row flex-column mt-2">
                    <div>
                        <input type="radio"  name="lettereRepeat" value="si" required/><span>si</span>
                    </div>
                    <div>
                        <input type="radio"  name="lettereRepeat" value="no" /><span>no</span>
                    </div>
                    <div class="mt-3">
                      <input type="checkbox"  name="caratteriScelti[]" value="1" />
                      <label for="caratteri">Lettere Minuscole</label>
                    </div>
                    <div>
                      <input type="checkbox" name="caratteriScelti[]" value="2" />
                      <label for="caratteri">Lettere Maiuscole</label>
                    </div>
                    <div>
                      <input type="checkbox"  name="caratteriScelti[]" value="3" />
                      <label for="caratteri">Numeri</label>
                    </div>
                    <div>
                      <input type="checkbox"  name="caratteriScelti[]" value="4" />
                      <label for="caratteri">Caratteri speciali</label>
                    </div>
                </div>
            </div>
              
            <button type="submit" class="btn btn-primary mt-3">Vai!</button>
            <button type="reset" class="btn btn-secondary mt-3">Annulla</button> 
        </form>

        <div class="mt-3">
            <?php if ( $opzioneScelta !== '' ) {
                $passwordFinale = generaPassword($opzioneScelta,$lunghezzaPassword,$ripetizione);

                echo "La password è:" . $passwordFinale;
            }
            
            ?>

        </div>

    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>
</html>