<?php

function removeDotsFolder($files)
{
    return count($files) - 2;
}

$message = $_POST["message"];

$files = scandir("./messages");
$num_files = removeDotsFolder($files);

$fileName = "msg-{$num_files}.txt";

$file = fopen("./messages/{$fileName}", "x");

fwrite($file, $message);

fclose($file);

header("Location: index.php");
