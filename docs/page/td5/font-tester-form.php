<?php

// FORMULAIRE MAIS AVEC METHODE POST

echo "<form method='POST' action='font-tester-form.php'>";
echo "<label for='color'>Choose a color</label>";
echo "<input type='text' id='color' placeholder='Color' name='color' aria-placeholder='Choose a color'>";
echo "<label for='size'>Choose a size</label>";
echo "<input type='text' id='size' name='size' placeholder='Choose a size'>";
echo "<label for='message'>Message</label>";
echo "<input type='text' id='message' name='message' placeholder='Type a message'>";
echo "<input type='submit' id='send' name='send' value='Envoyer'>";
echo "</form>";



echo "<style>p {color:".$_POST['color']."; 
                font-size:".$_POST['size'].";
                }</style>";
echo "<p>".$_POST['message']."</p>";


?>