<?php

	session_start();


    class Item {
      private $name;
      private $price;
      private $tax;

      public function __construct($name,$price,$tax = 0) {
        $this->name = $name;
        $this->price = $price;
        $this->tax = $tax;
      }

      public function getTotal() {
        return $this-> price * $this-> tax;
      }
      public function getName() {
        return $this-> name;
      }
      public function getTax() {
        return $this-> tax;
      }

      public function setTax($tax) {
        $this-> tax = $tax;
      }
    }

    $items = [
      new Item('juice',648),
      new Item('coffee',540),
      new Item('curry',972),
      new Item('pasta',1296),
      
    ];

    foreach ($items as $item) {
      $tax = isset($_POST[$item->getName()]) ? (int)$_POST[$item->getName()] : 0;
      $item->setTax($tax);

      $total = 0;
      foreach ($items as $item) {
        $total += $item->getTotal();
      }
    }
?>


<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="order.css" rel="stylesheet" type="text/css"/> 
	<script src="https://kit.fontawesome.com/8ed0d3d487.js" crossorigin="anonymous"></script>
	<title>Document</title>
</head>
<style>
  section{
    margin: 100px auto;
    width: 500px;
    background-color: #ded8d8;
    border-radius: 5px;
    padding: 10px 40px;
    }

.order-title h2{
   text-align: center;
}

.order-detail p{
    display: inline-block;
    font-size: x-large;
    width: 35%;
}

.order-item{
    padding-left: 60px;
}
.order-sum{
   text-align: end;
}

.order-total{
    border-top: solid 1px #000;
    text-align: center;
    padding-top: 20px;
}

.order-total{
    color: rgb(80, 212, 212);
}

</style>
<body>
<header>
		<div class="move">
		<nav class="header-nav">
			<div class="wrapper">
      <div class="signin"><a href="index10.php#">Signin</a></div>
	<div class="concept"><a href="index10.php#Concept">Concept</a></div>
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
	<div id="login-title" style="display:none;">
		<form name="login" class="login">
			<div class="top-menu">
			  <h3>ログイン</h3>
			</div>
			<div class="btm-menu">
			  <input type="id" name="user_id" placeholder="メールアドレス" class="mail-address">
			<br>
			  <input type="password" name="password"placeholder="パスワード" class="pass-word">
			</div>
			<button type="submit" class="hi2"><a href>送信</a></button>
			<div class="login-method">
				<div class="twitter">
					<input type="image" src="https://cdn.pixabay.com/photo/2014/04/03/11/53/twitter-312464_1280.png" class="twitter-img"
						   name="twitter">
					<div class="twitter-overlay"></div>
				  </div>
				  
			  <br>
			  <div class="facebook">
			  <input type="image" src="https://cdn.pixabay.com/photo/2017/06/22/06/22/facebook-2429746_1280.png" class="facebook-img"
			  name="facebook">
			</div>
			  <br>
			  <div class="googlemail">
			  <input type="image" src="https://cdn.pixabay.com/photo/2015/12/11/11/43/google-1088004_1280.png" class="googlemail-img"
			  name="googlemail">
			</div>
			  <br>
			  <div class="apple">
			  <input type="image" src="https://cdn.pixabay.com/photo/2022/03/18/05/51/logo-7075932_1280.png"  class="apple-img"
			  name="apple">
			</div>
			</div>
		</div>
	</div>
		<br>
		<br>
		</form>
	</header>
    <section>  
      <div class="order-title">
        <h2>注文内容確認</h2>
        <div class="order-detail">
        <?php foreach ($items as $item): ?>
          <p class="order-item"><?php echo $item->getName(); ?> × <?php echo $item->getTax(); ?>個</p>
          <p class="order-sum"><?php echo $item->getTotal(); ?>円</p>
        <?php endforeach; ?>
      
        </div>
      </div>
      <h2 class="order-total">合計金額:<?php echo $total; ?>円</h2>
 </section>




</body>
</html>
    
    