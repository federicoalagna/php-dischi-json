<?php
$dischi = [
    [
        'id' => 1,
        'title' => 'Get Rich Or Die Tryin',
        'artist' => '50 Cent'
    ],
    [
        'id' => 2,
        'title' => 'DAMN.',
        'artist' => 'Kendrick Lamar'
    ],
    [
        'id' => 3,
        'title' => 'Rodeo',
        'artist' => 'Travis Scott'
    ]
];

header('Content-Type: application/json');
echo json_encode($dischi);
?>
