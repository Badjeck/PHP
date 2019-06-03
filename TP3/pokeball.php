<?php
    include 'ball.php';

    class Pokeball extends Ball
    {
        public function  __construct ()
        {
            $this->name = "pokeball";
            $this->lvl_pokeball = 10;
        }
    }


?>