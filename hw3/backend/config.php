<?php
    // Enabling debugging
    error_reporting(E_ALL);

    // Importing some classes
    require_once getcwd() . "/backend/classes/php-form-validator/validate.php";
    require_once getcwd() . "/backend/classes/site.php";

    $config = (object)[
        "pages_folder" => getcwd() . "/backend/pages",
        "templates_folder" => getcwd() . "/frontend/templates"
    ];