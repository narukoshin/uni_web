<?php

    if (!isset($action)) {
        echo "No action specified, do not try to crack the system...";
        exit;
    }

    switch($action) {
        case "add_event":
            if (strtolower($_SERVER['REQUEST_METHOD']) == "post"){
                $event_name = $_POST["event_name"] ?? false;
                $event_date = $_POST["event_date"] ?? false;
        
                if ($event_name && $event_date) {
                    $stmt = $db->db->prepare("INSERT INTO `events` (`name`, `date`) VALUES(:name, :date)");
                    $stmt->execute([
                        "name" => $event_name,
                        "date" => $event_date
                    ]);
                }
            }
            break;
        case "edit_event":
            if (strtolower($_SERVER['REQUEST_METHOD']) == "post"){
                $event_name = $_POST["event_name"] ?? false;
                $event_date = $_POST["event_date"] ?? false;
                $event_id = $_POST["event_id"] ?? false;
                $action = $_POST["action"] ?? false;

                if ($event_name && $event_date && $event_id && $action) {
                    switch ($action) {
                        case "edit_event":
                            $stmt = $db->db->prepare("UPDATE `events` SET `name` = :name WHERE `id` = :id");
                            $stmt->execute([
                                "name" => $event_name,
                                "id" => $event_id
                            ]);
                            break;
                            case "delete_event":
                                $stmt = $db->db->prepare("DELETE FROM `events` WHERE `id` = :id");
                                $stmt->execute([
                                    "id" => $event_id
                                ]);
                            break;
                    }
                }
            }
            break;
    }

    header("Location: /");
    exit;