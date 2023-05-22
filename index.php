<?php

$minuscole = 'abcdefghijklmnopqrstuvwxyz';
$maiuscole = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
$numeri = '0123456789';
$simboli = '!#%^*-_,.?';

$opzioneScelta = '';
$passwordFinale = '';

$caratteriScelti = isset($_GET['caratteriScelti']);
$lunghezzaPassword = isset($_GET['lunghezzaPassword']);
$ripetizione = isset($_GET['lettereRepeat']);

if ($lunghezzaPassword && $_GET['lunghezzaPassword']) {
    $lunghezzaPassword = $_GET['lunghezzaPassword'];
};

if ($ripetizione && $_GET['lettereRepeat']) {
    $ripetizione = $_GET['lettereRepeat'];
}

if ($caratteriScelti && $_GET['caratteriScelti']) {
    
    $opzioneScelta = implode('',$_GET['caratteriScelti']);
    if ($opzioneScelta == '1') {
        $opzioneScelta = $minuscole;
    } else if ($opzioneScelta == '12') {
        $opzioneScelta = $minuscole . $maiuscole;
    } else if ($opzioneScelta == '123') {
        $opzioneScelta = $minuscole . $maiuscole . $numeri ;
    } else if ($opzioneScelta == '1234') {
        $opzioneScelta = $minuscole . $maiuscole . $numeri . $simboli ;
    } else if ($opzioneScelta == '13') {
        $opzioneScelta = $minuscole . $numeri ;
    } else if ($opzioneScelta == '14') {
        $opzioneScelta = $minuscole . $simboli ;
    } else if ($opzioneScelta == '2') {
        $opzioneScelta = $maiuscole;
    } else if ($opzioneScelta == '23') {
        $opzioneScelta = $maiuscole . $numeri ;
    } else if ($opzioneScelta == '24') {
        $opzioneScelta = $minuscole . $simboli ;
    } else if ($opzioneScelta == '234') {
        $opzioneScelta = $minuscole . $numeri . $simboli;
    } else if ($opzioneScelta == '3') {
        $opzioneScelta = $numeri ;
    } else if ($opzioneScelta == '34') {
        $opzioneScelta = $numeri . $simboli ;
    } else if ($opzioneScelta == '4') {
        $opzioneScelta = $simboli ;
    }
};

function generaPassword($opzioneScelta,$lunghezzaPassword,$ripetizione) {
    $lunghezzaMax = strlen($opzioneScelta) - 1;
    if ($lunghezzaPassword > $lunghezzaMax ){
        $lunghezzaPassword = $lunghezzaMax;
    }
    $password = '';

    for ($i = 1; $i <= $lunghezzaPassword; $i++) {
        $carattere = $opzioneScelta[rand(0, $lunghezzaMax)];
        
        if ($ripetizione == 1) {
            if (str_contains($password, $carattere)){
                $i--;
            }else {
                $password .= $carattere;
            }
        } else {
            $password .= $carattere;
        }
    }
    return  $password;

}


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
                    <label for="coding">Lettere ripetetute</label>
                </div>
                <div class="col-6 row flex-column mt-2">
                    <div>
                        <input type="radio" id="coding" name="lettereRepeat" value="0" required/><span>si</span>
                    </div>
                    <div>
                        <input type="radio" id="coding" name="lettereRepeat" value="1" /><span>no</span>
                    </div>
                    <div class="mt-3">
                      <input type="checkbox" id="coding" name="caratteriScelti[]" value="1" />
                      <label for="coding">Lettere Minuscole</label>
                    </div>
                    <div>
                      <input type="checkbox" id="music" name="caratteriScelti[]" value="2" />
                      <label for="music">Lettere Maiuscole</label>
                    </div>
                    <div>
                      <input type="checkbox" id="music" name="caratteriScelti[]" value="3" />
                      <label for="music">Numeri</label>
                    </div>
                    <div>
                      <input type="checkbox" id="music" name="caratteriScelti[]" value="4" />
                      <label for="music">Caratteri speciali</label>
                    </div>
                </div>
            </div>
              
            <button type="button" class="btn btn-primary mt-3">Vai!</button>
            <button type="reset" class="btn btn-secondary mt-3">Annulla</button> 
        </form>

    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>
</html>