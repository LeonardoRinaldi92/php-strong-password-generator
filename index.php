<?php

$minuscole = 'abcdefghijklmnopqrstuvwxyz';
$maiuscole = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
$numeri = '0123456789';
$simboli = '!#%^*-_,.?';

$charType = isset($_GET['charType']);

if ($charType && $_GET['charType']) {
    var_dump(implode('',$_GET['charType']));
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

<legend>Choose your interests</legend>
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