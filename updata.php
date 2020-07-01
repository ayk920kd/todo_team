<?php

require_once('Model/Task.php');

$title = $_POST['title'];
$contents = $_POST['contents'];
$contents = $_POST['deadline'];
$contents = $_POST['type'];
$id = $_POST['id'];

$task = new Task();
$task->update([$title, $contents, $deadline, $type, $id]);

header('location:index.php');
exit;
