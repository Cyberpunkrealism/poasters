<?php
$path = "img/";
$filenames = glob($path . "*");
$i = 1;
foreach($filenames as $f) {
    file_put_contents("metadata/" . $i, "{'name': '#" . $i . "', 'image': 'https://2024chan.com/erc721/poasters/" . $path . $f . "'}");
    $i++;
}
?>