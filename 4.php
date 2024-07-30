<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>冒険 - 洞窟の入り口 - 画面4</title>
</head>
<body>
    <p>暗くじとじとした洞窟だ。</p>
    <form action="5.php" method="post">
        <input type="hidden" name="player_name" value="<?php echo $_POST['player_name']; ?>">
        <input type="hidden" name="item" value="<?php echo $_POST['item']; ?>">
        <input type="submit" value="先に進む">
    </form>
</body>
</html>
