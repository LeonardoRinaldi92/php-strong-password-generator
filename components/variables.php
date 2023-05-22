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

include __DIR__ . '/function.php';