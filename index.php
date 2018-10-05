<!DOCTYPE html>

<html>
    <head>
        <title>CC Price Compare</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <div class="main">
            Debug
            <?php print_r($_POST); ?>
            <hr>
            <h2>CC Price Comparison</h2>
            <h4>Prototype <br>
            Personal Project</h4>
            <h3>Note: 2 tabs will open!</h3>
            <br>
            <form action="parse.php" method="post">
                <label>Product UPC: 
                    <input type="text" id="userInput" name="userInput" autofocus>
                </label>
                <input class="button" type="submit" value="Search" id="search">
            </form>
            Sample UPC: 735858350181
            <br><br>


        </div>
        <script src="scripts/search.js" type="text/javascript"></script>
    </body>
</html>