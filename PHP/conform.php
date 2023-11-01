<?php

session_start();
// 初期化
$error = [];

// セキュリティ対策
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $post = filter_input_array(INPUT_POST, );

    // フォームの送信時にエラーをチェックする
    if ($post['name'] === '' ) {
        $_SESSION['form'] = null;
        // blank（カラにするときに入れる）
        $error ['name'] = 'blank';
        // mb-strlenは文字の長さを指定するもの
    } else if (strlen($post['name']) < 10) {
        $error ['name'] = 'mb_strlen';
    }

    if ($post['kana'] === '' ) {
        // blank（カラにするときに入れる）
        $error ['kana'] = 'blank';
        // mb-strlenは文字の長さを指定するもの
    } else if (strlen($post['kana']) < 10) {
        $error ['kana'] = 'mb_strlen';
    }
   
    if ($post['tel'] === '') {
        // 空白の場合はエラーを設定しない
    } else if (!preg_match("/^[0-9]{10,}$/", $post['tel'])) {
        $error['tel'] = '!preg_match';
    }

    if ($post['email'] === '' ) {
        $error ['email'] = 'blank';
        // FILTER_VALIDATE_EMAIL　メールの書式があったいるか確認する関数
    } else if (!filter_var($post['email'], FILTER_VALIDATE_EMAIL)) {
        $error['email'] = 'email';
    }
  
    // フォームの送信時にエラーをチェックする
    if ($post['body'] === '' ) {
        // blank（カラにするときに入れる）
        $error ['body'] = '';
    }
  
    // エラーがなかったら
    if (count($error) === 0) {
        $_SESSION['form'] = null;
        $_SESSION['form'] = $post;
        header('Location: check.php');
        exit();
    }
  
} else {
    if (isset ($_SESSION['form'])) {
        $post = $_SESSION['form'];
    }
}

// ... その他のコード ...

// エラーのチェック
if (count($errors) > 0) {
  // エラーメッセージを表示
  // ...
} else {
  try {
      $user = 'root';
      $pwd = 'jackall.1417';
      $host = '127.0.0.1';
      $dbname = 'cafe';
      $dsn = "mysql:host={$host};dbname={$dbname}";

      $conn = new PDO($dsn, $user, $pwd);

      // データベースにデータを挿入するクエリ
      $stmt = $conn->prepare("INSERT INTO contacts (name, kana, tel, email, body) VALUES (?, ?, ?, ?, ?)");
      $stmt->execute([$name, $kana, $tel, $email, $body]);

      // データベースへの挿入が成功したら確認ページへリダイレクト
      header('Location: check.php');
      exit();
  } catch (PDOException $e) {
      echo "エラー: " . $e->getMessage();
  }
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/8ed0d3d487.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="conform.css">
	<title>Document</title>
    
</head>
<div class="move">
		<nav class="header-nav">
			<div class="wrapper">
	<div class="signin"><a href="#">Signin</a></div>
	<div class="concept"><a href="index10.php#Concept.php">Concept</a></div>
	<div class="menu"><a href="index10.php#menu">Menu</a></div>
	<div class="access"><a href="index10.php#access">Access</a></div>
	<div class="news"><a href="index10.php#news">News</a></div>
	<div class="contact"><a href="conform.php">Contact</a></div>
</div>
	<ul class="icon">
		<li class="tw"><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
		<li class="in"><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
	</ul>
		</nav>
	</div>
  
<div class="inquiry" id="contact">
	<h4 class="inquiry-otoi">お問い合わせ</h4>
	<form action="" method="post">
		<div class="inquiry-detail">
	<P class="submit-button">下記の項目をご記入の上送信ボタンを押してください</P>
	<P>送信頂いた件につきましては、当社より折り返しご連絡を差し上げます。
		<br>
	なお、ご連絡までに、お時間頂く場合もございますので予めご了承ください。
	<br>
	<span class="kome">*</span>は必須項目となります</p>
        <div>
        <?php if ($error ['name'] === 'blank'): ?>
              <span class="error_msg">氏名は必須入力です。10文字以内でご入力ください。</span>
             <?php endif; ?>
             <?php if ($error ['name'] === 'mb_strlen'): ?>
              <p class ="error_msg">氏名は必須入力です。10文字以内でご入力ください。</p>
             <?php endif; ?>
             <br>
            <label class="small" >氏名<span class="kome">*</span></label>
            <br>
            <input type="text" id="name" name="name" placeholder="山田太郎" class="free" value="<?php echo isset($post['name']) ? htmlspecialchars($post['name']) : ''; ?>" required autofocus>
        </div>
		<div>
    <?php if ($error ['kana'] === 'blank'): ?>
              <span class="error_msg">フリガナは必須入力です。10文字以内でご入力ください。</span>
             <?php endif; ?>
             <?php if ($error ['kana'] === 'mb_strlen'): ?>
              <p class ="error_msg">フリガナは必須入力です。10文字以内でご入力ください。</p>
             <?php endif; ?>
             <br>
            <label class="small">フリガナ<span class="kome">*</span></label>
			<br>
      <input type="text" id="kana" name="kana" placeholder="ヤマダタロウ" class="free" value="<?php echo isset($post['kana']) ? htmlspecialchars($post['kana']) : ''; ?>" required autofocus>

        </div>
		<div>
    <?php if ($error ['tel'] === '!preg_match'): ?>
              <p class="error_msg">電話番号は0-9の数字のみでご入力ください。</p>
             <?php endif; ?>
            <label class="small">電話番号</label>
			<br>
      <input type="text" id="tel" name="tel"  placeholder="09012345678" class="free" value="<?php echo isset($post['tel']) ? htmlspecialchars($post['tel']) : ''; ?>">
        </div>
        <div>
        <?php if ($error ['email'] === 'blank'): ?>
              <span class="error_msg">メールアドレスは正しくご入力ください。</span>
             <?php endif; ?>
             <?php if ($error ['email'] === 'email'): ?>
              <p class ="error_msg">メールアドレスは正しくご入力ください。</p>
             <?php endif; ?>
             <br>
            <label class="small">メールアドレス<span class="kome">*</span></label>
			<br>
      <input type="email" id="email" name="email" placeholder="test@test.co.jp" class="free" value="<?php echo isset($post['email']) ? htmlspecialchars($post['email']) : ''; ?>" required autofocus>
        </div>
		<br>
		<p class="submit-button">お問い合わせ内容をご記入ください<span class="kome">*</span></p>
        <div>
        <?php if ($error ['body'] === 'blank'): ?>
              <span class="error_msg"></span>
             <?php endif; ?>
        <label for="body"><?php echo $error['body']; ?></label>
        <textarea id="body" name="body" cols="50" rows="50" class="content" required><?php echo isset($post['body']) ? htmlspecialchars($post['body']) : ''; ?></textarea>>
      
        </div>
        <input type="submit" value="送信する" class="sub">
    </form>

</div>
</div>




<?php 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // 入力値の取得
  $name = $_POST['name'];
  $kana = $_POST['kana'];
  $tel = $_POST['tel'];
  $email = $_POST['email'];
  $body = $_POST['body'];

  // バリデーションの実行
  $errors = array();

  if (empty($name)) {
    $errors['name'] = '氏名は必須入力です。10文字以内で入力してください。';
  } else if (strlen($name) > 10) {
    $errors['name'] = '氏名は必須入力です。10文字以内で入力してください。';
  }

  if (empty($kana)) {
    $errors['kana'] = 'フリガナは必須入力です。10文字以内で入力してください。';
  } else if (strlen($kana) > 10) {
    $errors['kana'] = 'フリガナは必須入力です。10文字以内で入力してください。';
  }

  if (!empty($tel) && !preg_match('/^[0-9]+$/', $tel)) {
    $errors['tel'] = '電話番号は数字(0-9)で入力してください。';
  }

  if (empty($email)) {
    $errors['email'] = 'メールアドレスは正しくご入力ください。';
  } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = 'メールアドレスは正しくご入力ください。';
  }

  if (empty($body)) {
    $errors['body'] = 'お問い合わせ内容は必須入力です。';
  }

  // エラーのチェック
  if (count($errors) > 0) {
    // エラーメッセージを表示
    echo '<script>alert("入力エラーがあります。\n\n';
    foreach ($errors as $key => $value) {
      echo $key . ': ' . $value . '\n';
    }
    echo '");</script>';
  } else {
    // フォームのデータを処理する
    // ...
  }
}
?>




    