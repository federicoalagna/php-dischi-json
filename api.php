<?php
$dischi = json_decode(file_get_contents('dischi.json'), true);

header('Content-Type: application/json');
echo json_encode($dischi);
?>