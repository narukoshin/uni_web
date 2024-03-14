<?php

    require_once getcwd() . "/config.php";
    require_once getcwd() . "/backend/classes/database.php";

    $db = new Database(
        $config->database->host, 
        $config->database->user, 
        $config->database->pass, 
        $config->database->base
    );

    if (!$db) {
        echo "Unable to connect to database";
        exit;
    }

    $uri = $_SERVER["REQUEST_URI"] ?? "";

    switch($uri) {
        case "/addEvent":
            $action = "add_event";
            include_once getcwd() . "/backend/eventHandler.php";
            break;
        case "/editEvent":
            $action = "edit_event";
            include_once getcwd() . "/backend/eventHandler.php";
            break;
        default:
            include_once getcwd() . "/backend/calendar.php";
    }
