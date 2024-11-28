<?php

$array = ["Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sagittis odio ac auctor porttitor. Donec vehicula augue a mauris mollis, eu suscipit ante blandit. Vivamus vel interdum ante. Phasellus congue velit et nibh rhoncus, nec tincidunt ipsum efficitur. Aliquam magna dolor, sodales sit amet tincidunt eu, vehicula sed massa. Curabitur orci erat, luctus facilisis elit eu, vulputate auctor enim. Sed euismod posuere mauris. Etiam accumsan ac diam sit amet consequat. ", "Vivamus dignissim nisl leo, ut finibus nunc molestie nec. Mauris porttitor ultrices urna, vel consectetur nulla venenatis id. Proin et urna vel purus ullamcorper sollicitudin. Integer sagittis justo nec dui accumsan laoreet. Nullam turpis velit, gravida sit amet lacinia sit amet, convallis vel libero. Pellentesque venenatis ex et neque cursus pharetra. Vivamus tempus malesuada purus, in sagittis tortor posuere rhoncus. Mauris hendrerit, augue in sollicitudin tincidunt, enim orci lacinia dolor, a porttitor ligula libero vel nulla. Sed sed luctus lacus. Maecenas euismod tortor at gravida tristique. Donec nec nisl lorem. Maecenas molestie nunc eget augue commodo ornare. Suspendisse potenti. ", "Quisque vestibulum sapien justo, ut eleifend diam malesuada non. Duis est nisi, placerat sed dui mollis, luctus semper augue. Aenean sed ligula nec leo auctor vestibulum. Sed efficitur erat quis dui vulputate tincidunt. Cras lorem nibh, tincidunt a maximus vitae, accumsan vitae erat. Vestibulum orci nunc, pretium euismod nibh non, molestie sollicitudin sapien. Nullam ut purus id augue elementum dictum at sit amet nibh. Morbi a leo mattis, consectetur mauris vel, sollicitudin ante. Sed ac nisi tortor. Aenean tempus sed ligula ac pretium. Aliquam libero tellus, maximus eu velit eget, aliquam dictum elit. Duis at risus consectetur, auctor lectus a, finibus massa. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque laoreet sodales condimentum. Aliquam quis nisl a nisi rutrum commodo in a mauris. Quisque efficitur efficitur justo quis porttitor. "];

echo "<form method='GET' action='Lorem-ipsum-gen.php'>";
echo "<br><label for='color'>Choose number of paragraph to gen</label>";
echo "<input type='text' id='number' placeholder='number (30 max)' name='number' placeholder='Choose a number'>";
echo "<input type='submit' id='send' name='send' value='Envoyer'>";
echo "</form>";


echo "<label for='lorem'>Your Lorem : </label>";
echo "<br><textarea disabled='disabled' id='lorem' name='lorem'>".$array[$_GET['number']]."</textarea>";

echo "<style>textarea{width: 1500; height: 250;}</style>"

?>