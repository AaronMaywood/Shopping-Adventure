<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>お買い物選択 - 画面2</title>
</head>
<body>
    <h1>ようこそ！<?php echo $_POST['player_name']; ?>さん</h1>
    <p>何を買いますか？</p>
    <ol>
        <li>たいまつ</li>
        <li>たんけん</li>
        <li>あかいくつ</li>
    </ol>
    <form action="3.php" method="post">
        <input type="hidden" name="player_name" value="<?php echo $_POST['player_name']; ?>">
        <input type="text" name="item">
        <input type="submit">
    </form>
</body>
</html>
