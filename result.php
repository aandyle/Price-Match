<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <form action="index.php">
            <input class="button" type="submit" value="Back" id="search">
        </form>
        <br><br>
        
        <p>Compare with Amazon pricing in opened tab!</p>
        
        <?php
            $userInput = $_REQUEST["userInput"];
            $result = $_REQUEST["result"];
            $amazon_page = "https://www.amazon.ca/s/field-keywords=" . $userInput;
            $upc_lookup = "http://www.upcitemdb.com/upc/" . $userInput;
            echo "<div>";
            echo "<iframe style='float:left' src='https://m.canadacomputers.com/search.php?keywords=$result" . "' width='411' height='731'></iframe>";
            echo "<br><br>";
            echo "<iframe style='float:right' src=$upc_lookup" . " width='411' height='731'></iframe>"; //show upcitemdb iframe
            echo "</div>";
        ?>
    </body>
</html>
