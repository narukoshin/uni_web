<?php
    require_once "backend/config.php";

    $site = new Site();
    $site->create_pages()
        ->set_default("home")
        ->add("places")
        ->add("food")
        ->add("stories");
    $site->show($config->pages_folder);