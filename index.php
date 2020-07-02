<?php

    require_once('Model/Task.php');
    require_once('function.php');

    $task = new Task();
    $tasks = $task->getAll();

?>

<?php include('template.php'); ?>

<body>
    <?php include('header.php');?>
    <main>
      <?php foreach($tasks as $task) : ?>
        <!-- タスクのカード -->
       <div class="card">
           <div class="card_image">
                <img src="#" alt="タスクの写真"> 
           </div>
           <div class="card_body">
               <ul>
                   <li>Title:<?php echo h($task['title']); ?></li>
                   <li>Contents:<span><?php echo h($task['contents']); ?></span></li>
                   <li>Deadline:<span><?php echo h($task['deadline']); ?></span></li>
                   <li>Type:<span><?php echo h($task['type']); ?></span></li>
               </ul>
           </div>
           <div class="card_footer">
               <a href="edit.php?id=<?php echo h($task['id']); ?>" class="edit">EDIT</a>
               <a href="delete.php?id=<?php echo h($task['id']); ?>" class="delete">DELETE</a>
           </div>
       </div>
      <?php endforeach; ?>
    </main>
</body>
</html>