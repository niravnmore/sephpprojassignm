<?php
// Default timezone (if not selected)
$default_timezone = 'America/New_York';

// Check if a timezone is selected from the dropdown
if (isset($_POST['timezone'])) {
    $selected_timezone = $_POST['timezone'];
    setcookie("timezone", $selected_timezone, time() + (86400 * 30), "/"); // Store timezone in a cookie for 30 days
} elseif (isset($_COOKIE['timezone'])) {
    $selected_timezone = $_COOKIE['timezone'];
} else {
    $selected_timezone = $default_timezone;
}

// Set the selected timezone
date_default_timezone_set($selected_timezone);

// Get the current day
$currentDay = date("l");

// List of time zones
$timezones = [
    'Pacific/Kwajalein' => 'Eniwetok, Kwajalein (GMT -12:00)',
    'Pacific/Midway' => 'Midway Island, Samoa (GMT -11:00)',
    'Pacific/Honolulu' => 'Hawaii (GMT -10:00)',
    'Pacific/Marquesas' => 'Taiohae (GMT -9:30)',
    'America/Anchorage' => 'Alaska (GMT -9:00)',
    'America/Los_Angeles' => 'Pacific Time (US & Canada) (GMT -8:00)',
    'America/Denver' => 'Mountain Time (US & Canada) (GMT -7:00)',
    'America/Chicago' => 'Central Time (US & Canada), Mexico City (GMT -6:00)',
    'America/New_York' => 'Eastern Time (US & Canada), Bogota, Lima (GMT -5:00)',
    'America/Caracas' => 'Caracas (GMT -4:30)',
    'America/Halifax' => 'Atlantic Time (Canada), Caracas, La Paz (GMT -4:00)',
    'America/St_Johns' => 'Newfoundland (GMT -3:30)',
    'America/Sao_Paulo' => 'Brazil, Buenos Aires, Georgetown (GMT -3:00)',
    'Atlantic/South_Georgia' => 'Mid-Atlantic (GMT -2:00)',
    'Atlantic/Azores' => 'Azores, Cape Verde Islands (GMT -1:00)',
    'Europe/London' => 'Western Europe Time, London, Lisbon, Casablanca (GMT)',
    'Europe/Paris' => 'Brussels, Copenhagen, Madrid, Paris (GMT +1:00)',
    'Africa/Johannesburg' => 'Kaliningrad, South Africa (GMT +2:00)',
    'Europe/Moscow' => 'Baghdad, Riyadh, Moscow, St. Petersburg (GMT +3:00)',
    'Asia/Tehran' => 'Tehran (GMT +3:30)',
    'Asia/Dubai' => 'Abu Dhabi, Muscat, Baku, Tbilisi (GMT +4:00)',
    'Asia/Kabul' => 'Kabul (GMT +4:30)',
    'Asia/Karachi' => 'Ekaterinburg, Islamabad, Karachi, Tashkent (GMT +5:00)',
    'Asia/Kolkata' => 'Bombay, Calcutta, Madras, New Delhi (GMT +5:30)',
    'Asia/Kathmandu' => 'Kathmandu, Pokhara (GMT +5:45)',
    'Asia/Dhaka' => 'Almaty, Dhaka, Colombo (GMT +6:00)',
    'Asia/Yangon' => 'Yangon, Mandalay (GMT +6:30)',
    'Asia/Bangkok' => 'Bangkok, Hanoi, Jakarta (GMT +7:00)',
    'Asia/Singapore' => 'Beijing, Perth, Singapore, Hong Kong (GMT +8:00)',
    'Australia/Eucla' => 'Eucla (GMT +8:45)',
    'Asia/Tokyo' => 'Tokyo, Seoul, Osaka, Sapporo, Yakutsk (GMT +9:00)',
    'Australia/Adelaide' => 'Adelaide, Darwin (GMT +9:30)',
    'Australia/Sydney' => 'Eastern Australia, Guam, Vladivostok (GMT +10:00)',
    'Australia/Lord_Howe' => 'Lord Howe Island (GMT +10:30)',
    'Pacific/Guadalcanal' => 'Magadan, Solomon Islands, New Caledonia (GMT +11:00)',
    'Pacific/Norfolk' => 'Norfolk Island (GMT +11:30)',
    'Pacific/Auckland' => 'Auckland, Wellington, Fiji, Kamchatka (GMT +12:00)',
    'Pacific/Chatham' => 'Chatham Islands (GMT +12:45)',
    'Pacific/Apia' => 'Apia, Nukualofa (GMT +13:00)',
    'Pacific/Kiritimati' => 'Line Islands, Tokelau (GMT +14:00)',
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module 1 Lab Exercise 43</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>

    <div class="container-fluid">

        <div class="row bg-dark text-white text-center pt-3">
            <h1>Module 1 Lab Exercise 43</h1>
        </div>

        <div class="row bg-dark text-white text-center">
            <p>Date Finder with Time Zone: Write a script that finds the current day and prints "Happy Sunday" if it's
                Sunday, but also adjusts for different time zones.</p>
        </div>

        <div class="row bg-dark text-white text-center h-5">
            <h3>Date Finder with Time Zone</h3>
        </div>

        <div class="container text-center text-white bg-dark">
            <div class="row mt-3">
                <div class="col-10 text-center p-5">
                    <form action="" method="post" class="p-5">
                        <label for="timezone">Select Timezone:</label>
                        <select name="timezone" id="timezone" onchange="this.form.submit()">
                            <?php
                            foreach ($timezones as $tz => $label) {
                                $selected = ($tz == $selected_timezone) ? "selected" : "";
                                echo "<option value='$tz' $selected>$label</option>";
                            }
                            ?>
                        </select>
                        <input type="submit" value="Submit">
                    </form>

                    <?php
                    // date_default_timezone_set('GMT'); // Example: India Time (IST)

                    $today = date("F j, Y, g:i a"); // Example: January 1, 2023, 12:00 am
                    echo "Today is $today.<br>";
                    // Get the current day of the week
                    $currentDay = date("l"); // 'l' (lowercase L) returns full day name (e.g., Sunday, Monday)

                    if ($currentDay == "Sunday") {
                        echo "Happy Sunday!";
                    } else {
                        echo "Today is $currentDay.";
                    }
                    ?>
                </div>
                <div class="col-6 text-center p-5">
                    <h4>GMT</h4>
                    <?php
                    date_default_timezone_set('GMT');
                    echo date("F j, Y, g:i a");
                    ?>
                </div>
                <div class="col-6 text-center p-5">
                    <h4><?php echo $selected_timezone; ?></h4>
                    <?php
                    if ($currentDay == "Sunday") {
                        echo "Happy Sunday! 🎉";
                    } else {
                        echo "Today is $currentDay in $selected_timezone.";
                    }
                    ?>
                </div>
            </div>

            <hr>
        </div>

    </div>
</body>

</html>