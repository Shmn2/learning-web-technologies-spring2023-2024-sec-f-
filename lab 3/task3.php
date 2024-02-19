<html>
<html>
<head>
    <title>Date Validation</title>
    <style>
        fieldset {
            width: 200px;
        }
        hr {
            border: 1px solid black;
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <form method="post">
        <fieldset>
            <legend>Date of Birth</legend>
            <input type="text" name="date" placeholder="dd/mm/yyyy" value="<?php
                if (isset($_POST["submit"])){
                    $date = $_POST["date"];
                    if (empty($date)) {
                        print("Date cannot be empty");
                    } else {
                        $date_parts = explode('/', $date);
                        if (count($date_parts) == 3) {
                            $day = intval($date_parts[0]);
                            $month = intval($date_parts[1]);
                            $year = intval($date_parts[2]);
                            if (!checkdate($month, $day, $year)) {
                                print("Invalid date format");
                            } elseif ($year < 1953 || $year > 1998) {
                                print("Year must be between 1953 and 1998");
                            } elseif ($month < 1 || $month > 12) {
                                print("Month must be between 1 and 12");
                            } elseif ($day < 1 || $day > 31) {
                                print("Day must be between 1 and 31");
                            } else {
                                print("Your Date of Birth is: $date");
                            }
                        } else {
                            print("Invalid date format");
                        }
                    }
                }
            ?>">
            <hr><br>
            <input type="submit" name="submit">
        </fieldset>
    </form>
    <br>
</body>
</html>
