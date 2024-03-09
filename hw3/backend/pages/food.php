<?php
    /**
     * Imagine that you did not see this code.
     */

    ob_start();
    $web = (object)[
        "title" => "Japanese national food",
        "year" => (new DateTimeImmutable("now"))->format("Y"),
    ];

    // Header
    include_once getcwd() . "/frontend/partials/header.php";
    ob_get_contents();

    // Body
    include_once getcwd() . "/frontend/templates/food.php";
    ob_get_contents();

    // Footer
    include_once getcwd() . "/frontend/partials/footer.php";
    ob_get_contents();
    ob_end_flush();