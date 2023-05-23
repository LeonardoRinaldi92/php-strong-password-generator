<?php function generaPassword($opzioneScelta,$lunghezzaPassword,$ripetizione) {
    $lunghezzaMax = strlen($opzioneScelta) - 1;
    if ($ripetizione == 1 && $lunghezzaPassword > $lunghezzaMax ){
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