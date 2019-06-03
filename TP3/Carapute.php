<?php
    class Carapute extends Pokemon
    {

        public function __construct ($level, $life)
        {
            $this->name = 'Carapuce';
            $this->max_life = 100 + 9 * $level;
            $this->life = $this->max_life;
            $this->type = 'eau';
            $this->strength = 10 + 2 * $level;
        }
        public function level_up ($life_up=9,$strength_up=2)
        {
            parent::level_up($life_up,$strength_up);
        }

        public function captured ()
        {
            // chance sur 1 d'être capturer
            $captured_chance = $this->round((($max_life - $life) / $max_life) * (1 + ($lvl_pokeball - $lvl_pokemon) / 25), 2);
            return $captured_chance;
        }
    }
?>