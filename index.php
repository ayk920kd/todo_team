<?php

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
        <!-- タスクのカード -->
       <div class="card">
           <div class="card_image">
                <img src="#" alt="タスクの写真"> 
           </div>
           <div class="card_body">
               <ul>
                   <!-- <li><span>ここにタイトル</span></li> -->
                   <li>Title:<span></span></li>
                   <!-- <li><span>ここにコンテンツ</span></li> -->
                   <li>Contents:<span></span></li>
                   <!-- <li><span>ここに締め切り</span></li> -->
                   <li>Deadline:<span></span></li>
                   <!-- <li><span>ここにタスク種類</span></li> -->
                   <li>Type:<span></span></li>
               </ul>
           </div>
           <div class="card_footer">
               <button class="edit">EDIT</button>
               <button class="delete">DELETE</button>
           </div>
       </div>
    </main>
</body>
</html>