<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <a href="index.php" class="header_left">To Do App</a>
        <a href="create.php" class="header_right">CREATE</a>
    </header>

    <div class=create-form-wrapper>
        <h1>NEW POST</h1>
        <div class="form-wrapper">
            <form class="container" action="store.php">
                <div class="form-box">
                    <p>Title</p>
                    <input type="text" class="">
                </div>
                <div class="form-box">
                    <p>Contents</p>
                    <textarea name="" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="form-box">
                    <p>Deadline</p>
                    <input type="date">
                </div>
                <div class="form-box">
                    <p>Type</p>
                    <select name="type" id="">
                        <option value="selected" selected>なし</option>
                        <option value="school">学校</option>
                        <option value="job">仕事</option>
                        <option value="house_work">家事</option>
                    </select>
                </div>
                <div class="btn-wrapper">
                    <button>CREATE</button>
                </div>
            </form>
        </div>
    </div>


</body>
</html>