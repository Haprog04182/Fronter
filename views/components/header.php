<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fronter</title>
    <link rel="stylesheet" href="/assets/css/fronter_styles.css">
</head>
<body class="fronter_body">


<?php 
    $title = new Fronter("h1", "Fronter", []);
    $header = new Fronter("header", $title->get_elem());
    $header->render();
?>