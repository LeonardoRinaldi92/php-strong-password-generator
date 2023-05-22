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
    <title>Document</title>
</head>
<body>

<legend>Cosa vuoi includere?</legend>
<form method="GET" action="index.php">
    <div>
        <label for="coding">Lettere ripetetute</label>
        <input type="radio" id="coding" name="lettereRepeat" value="0" /><span>si</span>
        <input type="radio" id="coding" name="lettereRepeat" value="1" /><span>no</span>
    </div>
    <div>
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
    <input type="number" name='lunghezzaPassword'>    
    <button> vai!</button>    
    <p>
        <?php if ($opzioneScelta !== '') {
            $passwordFinale = generaPassword($opzioneScelta,$lunghezzaPassword,$ripetizione);
            echo "LA TUA PASSWORD E' : " . $passwordFinale;
        }
        ?>
    </p>
</form>
    
</body>
</html>