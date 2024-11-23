<?php

// FONT TESTER ROUGE - TAILLE 15PX - MESSAGE PERSONNALISABLE

echo "<a href='font-tester.php?color=rouge&size=15&message=Ceci est un font-tester'>Font tester : Rouge, Taille : 15, Message : Ceci est un font-tester</a>";

if ($_GET["color"] == "rouge") {
    echo "<style>
          p {
          color: red;
          }
          </style><p>".$_GET["message"]."</p>";
}

if ($_GET["size"] == "30") {
    echo "<style>
            p {
            font-size: 15px;
            }
          </style>";
}


// FONT TESTER VERT - TAILLE 30PX  - MESSAGE PERSONNALISABLE

echo "<br><a href='font-tester.php?color=vert&size=30&message=Ceci est un font-tester'>Font tester : Vert, Taille : 30, Message : Ceci est un font-tester</a>";

if ($_GET["color"] == "vert") {
    echo "<style>
          p {
          color: green;
          }
          </style><p>".$_GET["message"]."</p>";
}

if ($_GET["size"] == "30") {
    echo "<style>
            p {
            font-size: 30px;
            }
          </style>";
}

// FONT TESTER BLEU - TAILLE 50PX  - MESSAGE PERSONNALISABLE

echo "<br><a href='font-tester.php?color=bleu&size=50&message=Ceci est un font-tester'>Font tester : Vert, Taille : 30, Message : Ceci est un font-tester</a>";

if ($_GET["color"] == "bleu") {
    echo "<style>
          p {
          color: blue;;
          }
          </style><p>".$_GET["message"]."</p>";
}

if ($_GET["size"] == "50") {
    echo "<style>
            p {
            font-size: 50px;
            }
          </style>";
}

// JUSQU'ICI NOUS POUVONS INTERVERTIR LES TAILLES ET LES COULEURS EN MODIFIANT L'URL
//
//----------------------------------------------------------------------------------
//
// MAINTENANT ON AJOUTE UN FORMULAIRE POUR PLUS DE PERSONNALISATION

?>