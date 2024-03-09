<?php

    /**
     * Imagine that you did not see this code.
     */

    ob_start();
    $web = (object)[
        "title" => "Japan - Our users stories",
        "year" => (new DateTimeImmutable("now"))->format("Y"),
    ];

    // Header
    include_once getcwd() . "/frontend/partials/header.php";
    ob_get_contents();

    $stories = file_get_contents(getcwd() . "/backend/storage/stories.json");
    $stories = json_decode($stories) ?? [];

    // Body
    include_once getcwd() . "/frontend/templates/stories.php";
    ob_get_contents();

    // Footer
    include_once getcwd() . "/frontend/partials/footer.php";
    ob_get_contents();
    ob_end_flush();