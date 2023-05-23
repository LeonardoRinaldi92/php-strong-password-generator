<?php function generaPassword($opzioneScelta,$lunghezzaPassword,$ripetizione) {
    $lunghezzaMax = strlen($opzioneScelta) - 1;
    if ($ripetizione == 'no' && $lunghezzaPassword > $lunghezzaMax ){
        $lunghezzaPassword = $lunghezzaMax;
    }
    $password = '';

    for ($i = 1; $i <= $lunghezzaPassword; $i++) {
        str_shuffle($opzioneScelta);
        $carattere = $opzioneScelta[rand(0, $lunghezzaMax)];
        
        if ($ripetizione == 'no') {
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