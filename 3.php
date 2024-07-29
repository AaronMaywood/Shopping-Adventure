<?php
echo $_POST['player_name'];
?>は<?php
if ($_POST['item'] == 1) {
    echo "たいまつを買った。";
} else if($_POST['item'] == 2) {
    echo "たんけんを買った。";
} else {
    echo "あかいくつを買った。";
}
?>
<p style="background:lightyellow">
    <?php echo $_POST['player_name']; ?>様<br>
    -----------------------<br>
    <?php
    if ($_POST['item'] == 1) {
        echo "たいまつ";
    } else if ($_POST['item'] == 2) {
        echo "たんけん";
    } else {
        echo "あかいくつ";
    }
    ?>をお買い上げいただきありがとうございます。<br>
    <br>
    アイテムショップ ぼったくり屋
</p>
<p>さあ、冒険にでかけよう。</p>
<form action="4.php" method="post">
    <input type="hidden" name="player_name" value="<?php echo $_POST['player_name']; ?>">
    <input type="hidden" name="item" value="<?php echo $_POST['item']; ?>">
    <input type="submit" value="洞窟に潜る">
</form>
