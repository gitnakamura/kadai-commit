<?php
    $result = '無し';
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>おみくじ</title>
    </head>
    <body>
        <h1>おみくじ</h1>
        <p>おみくじの結果：<?php print htmlsecialchars($result,ENT_QUOTES,"UTF-8"); ?></p>
        <form action="sample.php" method="POST">
            <button tyoe="submit" name="act" value="draw">おみくじをひく！</button>
        </form>
    </body>
</html>