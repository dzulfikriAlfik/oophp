<?php

define('NAMA', 'Dzulfikri');

echo NAMA;

const UMUR = 32;

echo "<br>";
echo UMUR;

class Coba
{
    const NAMI = 'Dzulfikri';
}

echo "<br>";
echo Coba::NAMI;

function coba()
{
    return __FUNCTION__;
}

echo "<br>";
echo coba();

class Nyoba
{
    public $kelas = __CLASS__;
}

echo "<br>";
$obj = new Nyoba;
echo $obj->kelas;
