<?php
    include 'popo.php';
    class Potion extends popo
    {
        public function __construct ()
        {
            $this->name = "potion";
            $this->healing = 20;
        }
    }


?>