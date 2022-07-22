</<?php
    class Bola
    {

        public $jari;

        function __construct($r)
        {
            $this->jari = $r;
        }

        function luas()
        {
            $hasil = 4 * 3.14 * $this->jari * $this->jari;
            return $hasil;
        }

        function volume()
        {
            $hasil = 4 / 3 * 3.14 * $this->jari * $this->jari * $this->jari;
            return $hasil;
        }
    }
    ?>