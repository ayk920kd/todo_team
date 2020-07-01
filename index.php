<?php

require_once('Model/Task.php');
require_once('function.php');

$task = new Task();
$tasks = $task->getAll();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <title>To do app</title>
</head>
<body>
    <header>
        <a href="index.php" class="header_left">To Do App</a>
        <a href="create.php" class="header_right">CREATE</a>
    </header>
    <main>
      <?php foreach($tasks as $task) : ?>
        <!-- タスクのカード -->
       <div class="card">
           <div class="card_image">
                <img src="#" alt="タスクの写真"> 
           </div>
           <div class="card_body">
               <ul>
                   <!-- <li><span>ここにタイトル</span></li> -->
                   <li>Title:<?php echo h($task['title']); ?></li>
                   <!-- <li><span>ここにコンテンツ</span></li> -->
                   <li>Contents:<span><?php echo h($task['contents']); ?></span></li>
                   <!-- <li><span>ここに締め切り</span></li> -->
                   <li>Deadline:<span><?php echo h($task['deadline']); ?></span></li>
                   <!-- <li><span>ここにタスク種類</span></li> -->
                   <li>Type:<span><?php echo h($task['type']); ?></span></li>
               </ul>
           </div>
           <div class="card_footer">
               <a href="edit.php"?id=<?php echo h($task['id']); ?>"></a>
               <button class="edit">EDIT</button>
               <button class="delete">DELETE</button>
           </div>
       </div>
      <?php endforeach; ?>
    </main>
</body>
</html>