<?php 

    $routeArray  = explode('apirest-php/', $_SERVER['REQUEST_URI']);
    $routeArray = array_filter($routeArray);

    if(count($routeArray) == 1){
        $json = array(
            'status' => 200,
            'response' => 'Succesfull'
        );
        echo json_encode($json, http_response_code($json["status"]));
    }

    if(count($routeArray) > 1 && $_SERVER['REQUEST_METHOD']){
        if($_SERVER['REQUEST_METHOD'] == "GET"){
            include ("services/get.php");
        }
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $json = array(
                'status' => 200,
                'response' => 'POST'
            );
            echo json_encode($json, http_response_code($json["status"]));
            return;
        }
        if($_SERVER['REQUEST_METHOD'] == "PUT"){
            $json = array(
                'status' => 200,
                'response' => 'PUT'
            );
            echo json_encode($json, http_response_code($json["status"]));
            return;
        }
        if($_SERVER['REQUEST_METHOD'] == "DELETE"){
            $json = array(
                'status' => 200,
                'response' => 'DELETE'
            );
            echo json_encode($json, http_response_code($json["status"]));
            return;
        }
    }
?>