<?php

// FONT TESTER ROUGE - TAILLE 15PX - MESSAGE PERSONNALISABLE

echo "<a href='font-tester.php?color=red&size=15&message=Ceci est un font-tester'>Font tester : Rouge, Taille : 15, Message : Ceci est un font-tester</a>";


// FONT TESTER VERT - TAILLE 30PX  - MESSAGE PERSONNALISABLE

echo "<br><a href='font-tester.php?color=green&size=30&message=Ceci est un font-tester'>Font tester : Vert, Taille : 30, Message : Ceci est un font-tester</a>";


// FONT TESTER BLEU - TAILLE 50PX  - MESSAGE PERSONNALISABLE

echo "<br><a href='font-tester.php?color=blue&size=50&message=Ceci est un font-tester'>Font tester : Vert, Taille : 30, Message : Ceci est un font-tester</a>";


echo "<div><style>.font{color:".$_GET['color'].";font-size: ".$_GET['size']."}</style><p class='font'>".$_GET["message"]."</p></div>";


// MESSAGE D'ERREUR

if ($_GET["color"] != "blue" && $_GET["color"] && $_GET['color'] != "green" && $_GET["color"] != "red") {
    echo "<h1>ERREUR DANS LE CHAMP : COLOR</h1>";
}

// JUSQU'ICI NOUS POUVONS MODIFIER LES TAILLES ET LES COULEURS SEULEMENT EN MODIFIANT L'URL
//
//----------------------------------------------------------------------------------
//
// MAINTENANT ON AJOUTE UN FORMULAIRE POUR PLUS DE PERSONNALISATION

echo "<form>";
echo "<label for='color'>Choose a color</label>";
echo "<input type='text' id='color' placeholder='Color' name='color' aria-placeholder='Choose a color'>";
echo "<label for='size'>Choose a size</label>";
echo "<input type='text' id='size' name='size' placeholder='Choose a size'>";
echo "<label for='message'>Message</label>";
echo "<input type='text' id='message' name='message' placeholder='Type a mesage'>";
echo "<input type='submit' id='send' name='send' value='Envoyer' href='font-tester.php'>";
echo "</form>";


?>