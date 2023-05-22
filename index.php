<?php

$minuscole = 'abcdefghijklmnopqrstuvwxyz';
$maiuscole = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
$numeri = '0123456789';
$simboli = '!#%^*-_,.?';

$opzioneScelta = '';
$lineascelta = '';

$charType = isset($_GET['charType']);

if ($charType && $_GET['charType']) {
    
    $opzioneScelta = implode('',$_GET['charType']);
    var_dump($opzioneScelta);

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
    var_dump($opzioneScelta);
};
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
      <input type="checkbox" id="coding" name="charType[]" value="1" />
      <label for="coding">Lettere Minuscole</label>
    </div>
    <div>
      <input type="checkbox" id="music" name="charType[]" value="2" />
      <label for="music">Lettere Maiuscole</label>
    </div>
    <div>
      <input type="checkbox" id="music" name="charType[]" value="3" />
      <label for="music">Numeri</label>
    </div>
    <div>
      <input type="checkbox" id="music" name="charType[]" value="4" />
      <label for="music">Caratteri speciali</label>
    </div>
    

    <button> vai!</button>
</form>
    
</body>
</html>