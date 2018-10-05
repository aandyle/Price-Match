<?php

    ob_start();
    require('simple_html_dom.php');
    
    //get model number from upcitemdb

//    echo 'userInput is: ' . $_REQUEST['userInput'];
    echo '<br>';
    $userInput = $_REQUEST['userInput'];

    $url = "http://www.upcitemdb.com/upc/" . $userInput;
    $html = file_get_contents($url);    //get HTML to parse


    $modelLine;
    $id = 'info';
    $html= file_get_html($url);
    $ret = $html->find('div#info');
    
    foreach($html->find('div#info') as $e){
        $model = $e->find('td', 9);
        global $modelLine;
        $modelLine = $model->innertext;
    }

    
    echo 'modelLine: ' . $modelLine;
//    $_REQUEST['userInput'] = $userInput;
//    $_REQUEST['result'] = $modelLine;
    
    
    header("location:result.php?userInput=$userInput&result=$modelLine");
    
?>
