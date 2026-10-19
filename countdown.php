<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rocket Countdown</title>
    <link rel="stylesheet" href="mars.css">
</head>
<body>
    <header>
        <!-- include the menu code 1 time -->
         <?php include_once "menu.php"; ?>
         <h1>Rocket Countdown</h1>
    </header>
    <main>
        <div>Time Left:</div>
        <div id="message"></div>
        <div id="countdown">Get ready for the rocket countdown!</div>
    </main>

    <?php
        $launchDate = strtotime('October 21, 2026, 12:00:00');
        $formattedDate = date("F d, Y H:i:s", $launchDate);

        echo "formattedDate= " . $formattedDate;
    ?>

    <script>
        let countdownTimer = new Date("<?php echo "$formattedDate"; ?>").getTime();

        // this code will run every second to have a "live" countdown
        let intervalId = setInterval(() => {
            // get the current time in milliseconds
            let currentTime = new Date().getTime();

            console.log("currentTime=" + currentTime);
            console.log("countdownTimer=" + countdownTimer);
            

            // get the difference in milliseconds between launch date time and current time
            // this number will be positive if the launch has not happened yet
            // if this number is negative, the launch has already happened
            let timeDiff = countdownTimer - currentTime;

            console.log("timeDiff=" + timeDiff);

            // define constants to make our time calculation formulas more readable
            const MS_IN_A_SECOND = 1000;
            const MS_IN_A_MINUTE = MS_IN_A_SECOND * 60;
            const MS_IN_AN_HOUR = MS_IN_A_MINUTE * 60;
            const MS_IN_A_DAY = MS_IN_AN_HOUR * 24;

            // get the countdown in terms of days, hours, minutes, annd seconds
            // calculate days remaining 
            let days = Math.floor(timeDiff / MS_IN_A_DAY);
                        // calculate hours remaining 
            let hours = Math.floor((timeDiff % MS_IN_A_DAY) / MS_IN_AN_HOUR);
                        // calculate minutes remaining 
            let minutes = Math.floor((timeDiff % MS_IN_AN_HOUR) / MS_IN_A_MINUTE);
                        // calculate seconds remaining 
            let seconds = Math.floor((timeDiff % MS_IN_A_MINUTE) / MS_IN_A_SECOND);

            console.log("days=" + days);
            console.log("hours=" + hours);
            console.log("minutes=" + minutes);
            console.log("seconds=" + seconds);

            document.getElementById("countdown").textContent = " Days: " + days + "  Hours: " + hours + "   Minutes: " + minutes + "  Seconds: " + seconds;

            let descMessage = "";

            if (seconds < 0){
                descMessage = "Oh No! You missed the launch! Hope the next one is soon!";
            }
            else if (days < 2){
                descMessage = "Get ready for blast off!";
            }
            else{
                descMessage  = "Just gotta wait for the rocket.";
            }


            document.getElementById("message").textContent = descMessage;

        }, 1000); // 1000 milliseconds = 1 second
    </script>

</body>
</html>