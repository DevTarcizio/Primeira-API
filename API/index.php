<?php 
// Import output.php
require_once('output.php');


// Preparar Responses
$data['status'] = 'ERROR';
$data['data'] = null;

// API routes
if(isset($_GET['option'])) {

    switch ($_GET['option']) {
        case 'status':
            api_status($data);
            break;
        case 'name':
            define_response($data, 'API DE TESTE');
            break;
        case 'creator':
            define_response($data, 'Pedro Tarcizio');
            break;
        case 'random':
            api_random($data);
            break;
    }

}

// API response
response($data);
?>