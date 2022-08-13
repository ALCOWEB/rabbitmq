<?php
    declare(strict_types = 1);

    header('Content-type: application/json');

    echo json_encode(
        [
            'name' => 'Test API',
            'version' => '1.0'
        ]
    );