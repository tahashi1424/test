<?php
session_start();

$post = $_SESSION['form'];
?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="check.css" rel="stylesheet">
	<title>Document</title>
</head>
<div class="inquiry" id="contact">
	<h4 class="inquiry-otoi">お問い合わせ</h4>
	<form action="complete.php" method="post">
		<div class="inquiry-detail">
			<p>下記の項目をご記入の上送信ボタンを押してください
				<br>
				内容を訂正する場合は戻るを押してください。
			</p>
        <div>
            <p class="small">氏名</p>
            <?php echo htmlspecialchars($post['name']);?>
        </div>
		<div>
            <p class="small">フリガナ</p>
            <?php echo  htmlspecialchars($post['kana']);?>
        </div>
		<div>
            <p class="small">電話番号</p>
            <?php echo  htmlspecialchars($post['tel']);?>
        </div>
        <div>
            <p class="small">メールアドレス</p>
            <?php echo  htmlspecialchars($post['email']);?>
        </div>
        <div>
		<p class="small">お問い合わせ内容</p>
        <?php echo  htmlspecialchars($post['body']);?>
		</div>
		<div class="button-area">
			<button class="button-sub">送信</button><button type="button" class="button-return" onclick="history.back(-1)">戻る</button>
			  </div>
		</div>
    </form>
</div>
