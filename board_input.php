<!DOCTYPE html>
<head>
    <meta charset = “UFT-8”>
    <link rel="stylesheet" href="css/styles.css">
    <title>掲示板α</title>
</head>
<body>
<form action="board_output.php" method="post">

    <a class="name">お名前</a>
    <input class="namearea" type="text" name="name" value="">

    <a class="title"><br/>タイトル</a>
    <input class="titlearea" type="text" name="title" value="">

    <input type="submit" value="送信">

    <div class="text">メッセージ</div>
    <textarea class="textarea" type="text" name="text" value=""></textarea>

    <?php
    $pdo = new PDO("mysql:host=localhost;dbname=board_test;charset=utf8", "root", "");

    try {

    } catch (PDOException $e) {


        echo 'データベースにアクセスできません！' . $e->getMessage();


        exit;

    }
    $sql = "SELECT * FROM board";


    $stmt = $pdo->query($sql);
    ?>

    <?php foreach($stmt as $row) { ?>

    <div class="box1">
        <a class="green"><?php echo $row["title"]?></a>
         投稿者:<a class="blue"><?php echo$row["name"] ?></a>
         投稿日:<?php echo$row["date"] ?>
        <a class="green"><?php echo' No.'.$row["id"].'<br>';?></a>
        <p class="red"><?php echo $row["text"].'<br>';?></p>
    </div>
   <?php } ?>

</body>