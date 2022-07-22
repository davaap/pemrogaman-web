</<?php
    class Balok
    {

        public $panjang, $lebar, $tinggi;

        function __construct($x, $y, $z)
        {
            $this->panjang = $x;
            $this->lebar = $y;
            $this->tinggi = $z;
        }

        function volume()
        {
            $hasil = $this->panjang * $this->lebar * $this->tinggi;
            return $hasil;
        }

        function luas()
        {
            $hasil1 = 2 * $this->panjang * $this->lebar;
            $hasil2 = 2 * $this->panjang * $this->tinggi;
            $hasil3 = 2 * $this->lebar * $this->tinggi;
            $hasil = $hasil1 + $hasil2 + $hasil3;
            return $hasil;
        }
    }
    ?>