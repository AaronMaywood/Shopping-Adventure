<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>冒険 - 洞窟の中 - 画面5</title>
</head>
<body>
    <?php
    echo $_POST['player_name']
    ?>
    は、<?php
    if ($_POST['item'] == 1) {
        echo "たいまつを使った！<br>";
        echo "あたりが明るくなった！";
    } else {
        echo "たんけんを使った！<br>";
        echo "暗い所で短剣を振り回し、指を怪我した...GAME OVER";
    }
    if ($_POST['item'] == 1) {
    ?>
        <form action="6.php" method="post">
            <input type="hidden" name="player_name" value="<?php echo $_POST['player_name']; ?>">
            <input type="submit" value="次に進もう">
        </form>
    <?php
    } else {
    ?>
        <form action="2.php" method="post">
            <input type="hidden" name="player_name" value="<?php echo $_POST['player_name']; ?>">
            <input type="submit" value="もう一度最初からチャレンジ">
        </form>
    <?php
    }
    ?>
</body>
</html>