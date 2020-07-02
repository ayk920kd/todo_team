


<?php include('template.php'); ?>

<body>
    <?php include('header.php');?>
    <div class=create-form-wrapper>
        <h1>NEW POST</h1>
        <div class="form-wrapper">
            <form class="container" action="store.php" method="post">
                <div class="form-box">
                    <p>Title</p>
                    <input type="text" name="title">
                </div>
                <div class="form-box">
                    <p>Contents</p>
                    <textarea name="contents" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="form-box">
                    <p>Deadline</p>
                    <input type="date" name="deadline">
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
                    <button type="submit">CREATE</button>
                </div>
            </form>
        </div>
    </div>


</body>
</html>