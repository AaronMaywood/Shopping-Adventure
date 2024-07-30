<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>冒険 - 洞窟の外 - 画面6</title>
</head>
<body>
    <p>無事に洞窟を抜けた！</p>
    <h1><?php echo $_POST['player_name']; ?>の冒険は終了した！</h1>
    <form action="2.php" method="post">
        <input type="hidden" name="player_name" value="<?php echo $_POST['player_name']; ?>">
        <input type="submit" value="もう一度最初からチャレンジ">
    </form>
</body>
</html>