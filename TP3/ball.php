<?php
    include 'usable.php';

    abstract class Ball implements usable
    {
        public $name;
        public $lvl_pokeball;

        public function using($target)
        {
            if (round((($target->max_life - $target->life) / $target->max_life) * (1 + ($this->lvl_pokeball - $target->level) / 25), 2) >= 1)
            {
                echo "Tu as attrapé $target->name !";
                return true;
            }
            else
            {
                echo "$target->name ne veux pas se laisser attraper";
                return false;
            }
        }


    }


?>