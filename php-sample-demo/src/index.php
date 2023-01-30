<?php

$image = 'https://www.ondat.io/hubfs/Docker.png';
$imageData = base64_encode(file_get_contents($image));
echo '<img src="data:image/jpeg;base64,' . $imageData . '" height="500" width="500">';
echo "Hello, World from Docker!";
