<?php 
// ==================================================
// Funções para Endpoints
// ==================================================

function response($data_response) 
{
    header("Content-Type:application/json");
    echo json_encode($data_response);
}

// ===================================================

function define_response(&$data, $value)
{
    $data['status'] = "SUCCESS";
    $data['data'] = $value;
}

// ===================================================

function api_status(&$data)
{
    define_response($data, 'API RUNNING OK!');
}

// ===================================================

function api_random(&$data)
{
    $min = 0;
    $max = 1000;
    // Verifica se veio o MIN e / ou o MAX
    if(isset($_GET['min'])){
        $min = intval($_GET['min']);
    }
    if(isset($_GET['max'])){
        $max = intval($_GET['max']);
    }

    if($min >= $max){
        response($data);
        return;
    }

    define_response($data, rand($min, $max));
}
?>