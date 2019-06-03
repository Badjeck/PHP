<?php
    
    abstract class Pokemon 
    {
        public $name;
        public $life;
        public $level;
        public $type;
        public $strength;
        public $max_life;
        public $domages;

        public function level_up ($life_up,$strength_up)
        {
            $this->level += 1;
            $this->life += $life_up;
            $this->max_life += $life_up;
            $this->strength += $strength_up;

            $level_up_text = $this->name . ' passe au niveau ' . $this->level . "<br> Il gagne " . $life_up . ' pts de vie et ' . $strength_up . " pts de force. <br> <br> <br>";

            echo $level_up_text;
            return true;
        }

        public function do_domage ($target = null) 
        {
            // nb de dégat fait
            $this->domages = ceil($this->strength * (rand(900, 1100) / 1000));
            echo ("$this->name attaque $target->name et lui fait $this->domages de dégat <br> ");
            $this->take_domage($target);
        }

        public function take_domage ($target = null) 
        {
            $target->life = $target->life - $this->domages;
            $target->life_bar();
        }
        
        public function life_bar(){
            if ($this->life > 0){
                echo ('Il reste '.$this->life.'/'.$this->max_life.' PVs à '.$this->name.'.<br>');
                for($i = 0; $i < 100; $i++) {
                    if($i < (($this->life * 100)/$this->max_life)) {
                        echo '<span style="color:green;">|</span>';
                    } else {
                        echo '<span style="color:red;">|</span>';
                    }
                }
            } else {
                echo ($this->name . " est mis hors combat !");
            }
            echo '<br> <br>';
        }
    }
?>