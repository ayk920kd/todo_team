<?php
    require_once('Model/Task.php');
    require_once('function.php');
   
    $id = $_GET['id'];
    $task = (new Task())->findById($id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>To do app</title>
</head>
<body>
    <header>
        <a href="index.php" class="header_left">To Do App</a>
        <a href="create.php" class="header_right">CREATE</a>
    </header>
    <div class=create-form-wrapper>
        <h1>NEW POST</h1>
        <div class="form-wrapper">
            <form action="updata.php" class="container"  method="post">
                <div class="form-box">
                    <p>Title</p>
                    <input type="text" name="title" id="title" value="<?= h($task['title']); ?>">
                </div>
                <div class="form-box">
                    <p>Contents</p>
                    <textarea name="contents" id="contents"><?= h($task['contents']); ?></textarea>
                </div>
                <div class="form-box">
                    <p>Deadline</p>
                    <input type="date" name="deadline" id="deadline">
                    <?= h($task['deadline']); ?>
                 
                </div>
                <div class="form-box">
                    <p>Type</p>
                    <select name="type" id="type">
                        <option value="selected" selected>なし</option>
                        <option value="school">学校</option>
                        <option value="job">仕事</option>
                        <option value="house_work">家事</option>
                    </select>
                </div>
                <div class="btn-wrapper">
                    <input type="hidden" name="id" value="<?= h($task['id']); ?>">
                    <button type="submit" ac>UPDATE</button>
                </div>
            </form>
        </div>
    </div>  
</body>
</html>