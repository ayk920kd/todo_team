<?php

    require_once('Model/Task.php');

    $title = $_POST['title'];
    $contents = $_POST['contents'];
    $deadline = $_POST['deadline'];
    $type = $_POST['type'];
    $created = date("Y/m/d H:i:s");
    

    $task = new Task();
    $task->create([$title, $contents, $deadline, $type, $created]);


    header('location:index.php');
    exit;



?>