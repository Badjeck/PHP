<?php

include 'pokemon.php';
include 'Carapute.php';
include 'Boulbizar.php';
include 'pokeball.php';
include 'potion.php';

echo "<audio style='display:none;' controls autoplay>
<source src='images/music.mp3' type='audio/mpeg'>
Your browser does not support the audio element.
</audio> <br>";
$cara = new Carapute(5,100);
print "<img src='images/carapute.png' style='max-witdh:200px;max-height:200px;'>";
print "<img src='images/vs.png' style='max-witdh:200px;max-height:200px;'>";
$bulbi = new Boulbizar(5,100);
print "<img src='images/bulbisar.png' style='max-witdh:200px;max-height:200px;'><br>";
$potion = new Potion();
$pokeball = new Pokeball();

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
                if($pokeball->using($bulbi))//utilise une pokéball sur bulbi
                {
                    $end = true;
                }
            }
            else
            {
                if($cara->life <= 30)
                {
                    $potion->using($cara);//utilise une potion
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


