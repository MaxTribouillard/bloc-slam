<?php

// FONT TESTER ROUGE - TAILLE 15PX - MESSAGE PERSONNALISABLE

echo "<a href='font-tester.php?color=red&size=15&message=Ceci est un font-tester'>Font tester : Rouge, Taille : 15, Message : Ceci est un font-tester</a>";


// FONT TESTER VERT - TAILLE 30PX  - MESSAGE PERSONNALISABLE

echo "<br><a href='font-tester.php?color=green&size=30&message=Ceci est un font-tester'>Font tester : Vert, Taille : 30, Message : Ceci est un font-tester</a>";


// FONT TESTER BLEU - TAILLE 50PX  - MESSAGE PERSONNALISABLE

echo "<br><a href='font-tester.php?color=blue&size=50&message=Ceci est un font-tester'>Font tester : Vert, Taille : 30, Message : Ceci est un font-tester</a>";


echo "<div><style>.font{color:".$_GET['color'].";font-size: ".$_GET['size']."}</style>
                <p class='font'>".$_GET["message"]."</p></div>"

// JUSQU'ICI NOUS POUVONS MODIFIER LES TAILLES ET LES COULEURS SEULEMENT EN MODIFIANT L'URL
//
//----------------------------------------------------------------------------------
//
// MAINTENANT ON AJOUTE UN FORMULAIRE POUR PLUS DE PERSONNALISATION


?>