<?php

class ContohStatic
{
    public static $angka = 1;
    public static $waktu = "pagi";

    public static function Hello()
    {
        return "hello";
    }
    public static function Selamat()
    {
        return "selamat " . self::$waktu;
    }
}

echo ContohStatic::$angka;
echo "<br>";
echo ContohStatic::Hello();
echo "<br>";
echo ContohStatic::Selamat();
