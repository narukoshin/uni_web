<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendar View</title>
    <meta name="description" content="A web based calendar">
    <meta name="keywords" content="calendar">
    <meta name="author" content="Alekss B.Briģis">
    <link href="<?=$config->uri?>/frontend/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=$config->uri?>/frontend/assets/css/style.css" rel="stylesheet">
</head>
<body>
    <?php
        $yearDiff = 40;
        if (isset($_GET["month"]) || isset($_GET["year"])) {
            $date = DateTimeImmutable::createFromFormat("Y-m", sprintf("%s-%s", $_GET["year"], $_GET["month"]));
            $currMonth = $date->format("m");
            $currYear = $date->format("Y");
        } else {
            $date = new DateTimeImmutable("now");
            $currMonth = $date->format("m");
            $currYear = $date->format("Y");
        }

        $daystotal = cal_days_in_month(CAL_GREGORIAN, $currMonth, $currYear);
        $firstDay = date('N', strtotime("$currYear-$currMonth-01"));

        $day = 1;
        $numWeeks = ceil(($daystotal + $firstDay - 1) / 7);

        $monthSelect = ["january", "february", "march", "april", "may", "june", "july", "august", "september", "october", "november", "december"];

    ?>
    <div class="container">
        <h1 class="text-center">Calendar</h1>
        <div class="mb-3 d-flex flex-row justify-content-center align-items-center">
            <div class="p-2 me-auto">
                <a href="<?=$config->uri?>/<?=($currMonth-1 < 1) ? 12 : $currMonth-1?>/<?=($currMonth-1 < 1) ? $currYear-1 : $currYear?>" class="btn btn-primary btn-sm">Back</a>
            </div>
            <div class="p-2 mx-auto d-flex flex-row gap-3">
                <select class="form-select" name="monthSelector">
                    <?php foreach($monthSelect as $monthInt => $monthName): ?>
                    <option value="<?=$monthInt?>" <?=$date->format("m")==$monthInt+1?"selected":""?>><?=ucfirst($monthName)?></option>
                    <?php endforeach;  ?>
                </select>
                <select class="form-select" name="yearSelector">
                    <?php 
                        $year = $date->format("Y");
                        $start = $year - $yearDiff;
                        $end = $year + $yearDiff;
                        for ($i = $start; $i <= $end; $i++):
                    ?>
                    <option value="<?=$i?>" <?=$i==$year?"selected":""?>><?=$i?></option>
                    <?php endfor; ?>
                </select>
            </div>
            <div class="p-2 ms-auto">
                <a href="<?=$config->uri?>/<?=($currMonth+1 > 12) ? 1 : $currMonth+1?>/<?=($currMonth+1 > 12) ? $currYear+1 : $currYear?>" class="btn btn-primary btn-sm">Next</a>
            </div>
        </div>
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <th>Monday</th>
                    <th>Tuesday</th>
                    <th>Wednesday</th>
                    <th>Thursday</th>
                    <th>Friday</th>
                    <th class="weekend sat">Saturday</th>
                    <th class="weekend">Sunday</th>
                </tr>
                <?php
                    for ($i = 0; $i < $numWeeks; $i++):
                ?>
                <tr class="week">
                    <?php
                        for ($j = 0; $j < 7; $j++) {
                            $dateKey = sprintf("%s-%s-%s", $currYear, $currMonth, str_pad($day, 2, '0', STR_PAD_LEFT));
                            echo "<td class='weekday' hw-date='$dateKey'>";
                            if ($i == 0 && $j < $firstDay - 1) {
                              echo "";
                            } elseif ($day > $daystotal) {
                              echo "";
                            } else {
                                $dayClass = ["dayNumber", "text-start", "w-100"];
                                switch($j){
                                    case 0:
                                        echo DateTimeImmutable::createFromFormat("Y-m-d", $dateKey)->format("W");
                                        break;
                                    case 5:
                                        array_push($dayClass, "weekend");
                                        array_push($dayClass, "sat");
                                        break;
                                    case 6:
                                        array_push($dayClass, "weekend");
                                        break;
                                }
                                if ($day == date('j') && $currMonth == date('m') && $currYear == date('Y')) {
                                    array_push($dayClass, "current-day");
                                }
                                ?>
                                <div class="d-flex flex-column mb-3">
                                    <span class="<?=implode(" ", $dayClass)?>"><?=$day?></span>
                                    <?php 
                                        // Name days
                                        $stmtNames = $db->db->prepare("SELECT name FROM `names` WHERE `day` = :day AND month = :month");
                                        $stmtNames->execute([
                                            "day" => $day,
                                            "month" => $currMonth
                                        ]);
                                        $names = $stmtNames->fetchAll(PDO::FETCH_COLUMN);

                                        if (!empty($names)):
                                            echo '<div class="namedays text-end d-flex flex-column mb-3">';
                                            foreach ($names as $name):
                                    ?>
                                        <span><?=$name?></span>
                                        <?php endforeach; ?>
                                    </div>
                                    <?php endif; ?>

                                    
                                    <?php 
                                        // Holidays
                                        $stmt = $db->db->prepare("SELECT `holiday` FROM `holydays` WHERE `day` = :day AND month = :month");
                                        $stmt->execute([
                                            "day" => $day,
                                            "month" => $currMonth
                                        ]);
                                        $holidays = $stmt->fetchAll(PDO::FETCH_COLUMN);

                                        if (!empty($holidays)):
                                            echo '<div class="holidays text-start d-flex flex-column mb-3">
                                            ';
                                            foreach ($holidays as $holiday):
                                        ?>
                                        <span><?=$holiday?></span>
                                        <?php endforeach; ?>
                                    </div>
                                    <?php endif;
                                        // Custom events
                                        $stmt = $db->db->prepare("SELECT `id`, `name`, `date` FROM `events` WHERE `date` = :date");
                                        $stmt->execute([
                                            "date" => $dateKey
                                        ]);
                                        $events = $stmt->fetchAll(PDO::FETCH_OBJ);

                                        if (!empty($events)):
                                            echo '<div class="events text-middle d-flex flex-column mb-3">
                                            ';
                                            foreach ($events as $event):
                                        ?>
                                        <span class="custom-event" event-id="<?=$event->id?>" event-date="<?=$event->date?>"><?=$event->name?></span>
                                        <?php endforeach; ?>
                                    </div>
                                    <?php endif; ?>
                                </div>
                              <?php
                              $day++;
                            }
                            echo "</td>";
                          }
                    ?>
                </tr>
                <?php
                    endfor;
                ?>
            </tbody>
        </table>
    </div>
    <div class="modal fade" id="addEvent">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title">hello, world</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <form action="<?=$config->uri?>/addEvent" method="POST">
                                <input type="hidden" name="event_date" value="">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Event name</label>
                                    <input type="text" name="event_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <div id="emailHelp" class="form-text">For example: Meething with the boss.</div>
                                </div>
                                <div class="mb-3 mx-auto">
                                    <button type="submit" class="btn btn-primary">Create event</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="editEvent">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title">hello, world</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <form action="<?=$config->uri?>/editEvent" method="POST">
                                <input type="hidden" name="event_date">
                                <input type="hidden" name="event_id">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Event name</label>
                                    <input type="text" name="event_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <div id="emailHelp" class="form-text">For example: Meething with the boss.</div>
                                </div>
                                <div class="mb-3 mx-auto d-flex flex-row gap-3">
                                    <button class="btn btn-primary" name="action" value="edit_event">Edit event</button>
                                    <button class="btn btn-danger" name="action" value="delete_event">Delete event</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?=$config->uri?>/frontend/assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?=$config->uri?>/frontend/assets/js/script.js"></script>
</body>
</html>