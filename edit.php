<?php

    require_once('Model/Task.php');
    require_once('function.php');
   
    $id = $_GET['id'];
    $task = (new Task())->findById($id);

?>

<?php include('template.php'); ?>

<body>
    <?php include('header.php');?>
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
                    <input type="date" name="deadline" id="deadline" value="<?= h($task['deadline']); ?>">
                </div>
                <div class="form-box">
                    <p>Type</p>
                    <select name="type" id="test" value="<?= h($task['type']); ?>">
                        <option class="sample" value="" >なし</option>
                        <option class="sample" value="school">学校</option>
                        <option class="sample" value="job">仕事</option>
                        <option class="sample" value="house_work">家事</option>
                    </select>
                    <script>
                        var type = document.getElementById('test');
                        var value = type.getAttribute('value');
                        var eles = document.getElementsByClassName('sample');
                        for (ele of eles){
                            var input = ele.getAttribute('value');
                            if (input == value) {
                                ele.setAttribute("selected", "");
                                console.log(ele);
                            }
                        }
                    </script>
                   
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