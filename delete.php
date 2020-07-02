<?php

    require_once('Model/Task.php');

    $id = $_GET['id'];

    $task = new Task();
    $task->delete([$id]);

    header('location:index.php');
    exit;

?>
