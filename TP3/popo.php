<?php
    abstract class popo implements usable
    {
        public $name;
        public $healing;

        public function using($target)
        {
            $target->life += $this->healing;
            echo "Carapuce regagne 20PV <br>";
            $target->life_bar();
        }
    }


?>