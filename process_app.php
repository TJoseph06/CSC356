<?php
// declaring a variable here that will be used in the if/else code
    $message = "";

    // check to se if this is a post request; if so, we can grab the form info
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        // we can get the name of the user
        // TODO: add the isset ternary operator
        $full_name = $_POST["txtName"];
        $num_years = $_POST["numYears"];

        $message = "Your name: " . $full_name . " Years of Experience: " . $num_years;
    }
    // you cannot access this page directly
    else{
        $message = "This page cannot be accessed as of now.";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mars.css">
    <title>Application Recieve</title>
</head>
<body>
     <header>
        <h1>Pilot Application</h1>
        <?php include 'mars_menu.php'; ?>
    </header>
    <main>
        Thank you for applying!

        <!-- show the message we built in the php caod -->
        <?php echo $message; ?>
    </main>

</body>
</html>