<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilot Application</title>
    <!-- this is the link that connects the php file and the external css file -->
    <link rel="stylesheet" href="mars.css">
    <!-- this is the link to the js file; defer
     to wait to run the Javascrpit code
     until all of the HTML elements have loaded -->
     <script src="mars.js" defer></script>

</head>
<body>
    <header>
        <h1>Pilot Application</h1>
        <?php include 'mars_menu.php'; ?>
    </header>
    <main>
        <!-- we need a form with at least 5 inputs, mix of numbers and text inputs-->
        <div id="divMsg"></div>

        <!-- 1. Include JavaScript validation.
    2. You may use POST or GET to transfer this information between pages.
    3. There should be a link from each page to the home page.
    4. Include thorough code comments.
    5. Design a great User Experience.
    Note: the data does not have to be saved to a database at this time.-->

        <form name="frmApp" id="frmApp" action="process_app.php"
        method="post" onsubmit="return validateForm();">
            <div>
                <label for="txtName">Your name:</label>
                <input type="text" id="txtName" name="txtName">
            </div>

            <div>
                <label for="numYears">Years of experience:</label>
                <input type="number" id="numYears" number="numYears">
            </div>

            <button type="submit" id="btnSubmit"
             name="btnSubmit">Submit Application</button>
        </form>
    </main>


</body>
</html>