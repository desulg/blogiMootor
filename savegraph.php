<?php
    if(isset($_REQUEST["image"]) && $_REQUEST["filename"] && $_REQUEST["title"]) {
        $data = $_REQUEST["image"];
        $filename = $_REQUEST["filename"];
        $title = $_REQUEST["title"];
        echo $data;
        file_put_contents("images/" . $filename . ".png", base64_decode($data));
       
        $newline = "\n" . $title . "," . $filename;
        $fp = fopen('images/titles.csv', 'a');
        fwrite($fp, $newline);
        fclose($fp);
    }

?>