<?php

// MESSAGE 1
echo "<a href='message.php?message=coucou'>Voici le premier message : </a>";

echo $_GET['message']??"message par défaut car pas encore renseigner";

// MESSAGE 2

echo "<br><a href='message.php?messagev2=ca marche'>Voici le second message : </a>";

echo $_GET['messagev2']??"message par défaut car pas encore renseigner";

// MESSAGE 3

echo "<br><a href='message.php?messagev3=vraiment bien'>Voici le troisième message : </a>";

echo $_GET['messagev3']??"message par défaut car pas encore renseigner";

?>