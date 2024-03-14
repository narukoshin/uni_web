<?php

    // Change these values to your database.

    $config = (object)[
        "database" => (object)[
            "host" => "localhost",
            "user" => "root",
            "pass" => "",
            "base" => "hw4",
        ],
        "uri" => sprintf("%s://%s", (empty($_SERVER["HTTPS"]) ? "http" : "https"), $_SERVER["HTTP_HOST"]),
    ];