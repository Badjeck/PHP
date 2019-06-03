<?php

$end = false;
$myturn = true;

while(!$end)
{
    if ($myturn)
    {
        if($cara->life > 0)
        {
            if($bulbi->life <=30)
            {
                if($Pokeball->using($bulbi))//utilise une pokéball sur bulbi
                {
                    $end = true;
                }
            }
            else
            {
                if($cara->life <= 30)
                {
                    $potion->using($cara);//utilise une potion
                    $end = true;
                }
                else
                {
                    $cara->do_domage($bulbi);//attaque
                    $myturn = false;
                }
            }
        }
        else
        {
            echo "Bulbisar vous a vaincu <br>";
            $end = true;
        }
    }
    else
    {
        //ennemi joue
        if ($bulbi->life >0)
        {
            $bulbi->do_domage($cara);
            $myturn = true;
        }
        else
        {
            echo"bulbisar est mort";
            $end = true;
        }
    }
}



?>