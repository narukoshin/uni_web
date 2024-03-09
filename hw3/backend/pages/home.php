<?php

    /**
     * Imagine that you did not see this code.
     * 
     * this is what happens when you make people to hurry.
     * Worst code ever that I have written.
     */

    ob_start();
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $form = $site->ParseForm();
        if ($form) {
            $stories = file_get_contents(getcwd() . "/backend/storage/stories.json");
            $stories = json_decode($stories) ?? [];

            $story = [
                "author" => sprintf("%s %s", $form->firstname, $form->lastname),
                "created_at" => (new DateTimeImmutable("now"))->format("M d, Y"),
                "message" => $form->comment
            ];
            array_push($stories, $story);
            file_put_contents(getcwd() . "/backend/storage/stories.json", json_encode($stories));
        }
    }


    $web = (object)[
        "title" => "My favorite Country",
        "year" => (new DateTimeImmutable("now"))->format("Y"),
    ];

    // Header
    include_once getcwd() . "/frontend/partials/header.php";
    ob_get_contents();

    // Body
    include_once getcwd() . "/frontend/templates/home.php";
    ob_get_contents();

    // Footer
    include_once getcwd() . "/frontend/partials/footer.php";
    ob_get_contents();
    ob_end_flush();