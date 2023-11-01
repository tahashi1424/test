<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="home.css" rel="stylesheet" type="text/css" />
	<script src="https://kit.fontawesome.com/8ed0d3d487.js" crossorigin="anonymous"></script>
	<title>Document</title>
	<style>
		#login-title {
			display: none;
		}
	</style>
</head>

<body>
	<header>
		<div class="move">
			<nav class="header-nav">
				<div class="wrapper">
					<div class="signin"><a href="#">Signin</a></div>
					<div class="concept"><a href="#Concept">Concept</a></div>
					<div class="menu"><a href="#menu">Menu</a></div>
					<div class="access"><a href="#access">Access</a></div>
					<div class="news"><a href="#news">News</a></div>
					<div class="contact"><a href="conform.php">Contact</a></div>
				</div>
				<ul class="icon">
					<li class="tw"><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
					<li class="in"><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
				</ul>
			</nav>
		</div>
		<div id="login-title">
			<form name="login" class="login" id="login-sub">
				<div class="top-menu">
					<h3>ログイン</h3>
				</div>
				<div class="btm-menu">
					<input type="email-input" name="email-input" placeholder="メールアドレス" class="mail-address">
					<br>
					<input type="password-input" name="password-input" placeholder="パスワード" class="pass-word">
				</div>
				<button type="submit" class="hi"><a href>送信</a></button>
				<div class="login-method">
					<div class="twitter">
						<input type="image" src="https://cdn.pixabay.com/photo/2014/04/03/11/53/twitter-312464_1280.png" class="twitter-img" name="twitter">
						<div class="twitter-overlay"></div>
					</div>

					<br>
					<div class="facebook">
						<input type="image" src="https://cdn.pixabay.com/photo/2017/06/22/06/22/facebook-2429746_1280.png" class="facebook-img" name="facebook">
					</div>
					<br>
					<div class="googlemail">
						<input type="image" src="https://cdn.pixabay.com/photo/2015/12/11/11/43/google-1088004_1280.png" class="googlemail-img" name="googlemail">
					</div>
					<br>
					<div class="apple">
						<input type="image" src="https://cdn.pixabay.com/photo/2022/03/18/05/51/logo-7075932_1280.png" class="apple-img" name="apple">
					</div>
				</div>
		</div>
		</div>

		<br>
		<br>
		</form>
	</header>
	<div class="overlay">
		<img src="https://cdn.pixabay.com/photo/2022/08/30/07/28/cafe-logo-7420534_1280.png" width="270px" height="270px">
		<P>あなたの一日に小さな喜びを</P>
		<a href="#Concept">
			<i class="fas fa-caret-down fa-3x l-mv_inner_cont_triangle_icon"></i>
		</a>
	</div>
	<section id="Concept">
		<div class="coffee">
			<div class="coffee-image">
				<img src="https://cdn.pixabay.com/photo/2021/09/06/01/13/coffee-6600644_1280.jpg">
			</div>
			<div class="concept-title">
				<p>Concept</p>
				<h1>コンセプト</h1>
				<p class="concept-text">Re-Light cafe は博多駅から徒歩10分のところにあるカフェです。木を基調にした開放的な店内でゆったりとお過ごしいただけます。スタンダードなコーヒーから、こだわりのオリジナルコーヒーをお楽しみください。また氷の量や甘さなどを細かくお客様のお好みの味に変えることができます。</p>
			</div>
		</div>
		</div>
	</section>
	<div class="menu-title" id="menu">
		<p>menu</p>
		<h2>メニュー4品</h2>
	</div>

	<div class="menu-items">
		<div class="menu-item-juice">
			<img src="https://cdn.pixabay.com/photo/2016/08/23/15/52/fresh-orange-juice-1614822_1280.jpg" width="70%" class="items-image">
			<h3 class="menu-name">
				<a href="juice.php">JUICE
			</h3></a>
			<p>アイス</p>
			<p>￥648（税込）</p>
			<form method="post" action="/order.php">
				<input type="text" placeholder=0 name="juice" style="width: 100px">
				<span>個</span>
		</div>
		<div class="menu-item-icecoffee">
			<img src="https://cdn.pixabay.com/photo/2017/09/04/18/39/coffee-2714970_1280.jpg" width="70%" class="items-image">
			<h3 class="menu-name">
				<a href="coffee.php">COFFEE
			</h3></a>
			<P>ホット</P>
			<p>￥540（税込）</p>
			<input type="text" placeholder=0 name="coffee" style="width: 100px">
			<span>個</span>
		</div>
		<div class="menu-item-curry">
			<img src="https://cdn.pixabay.com/photo/2016/10/31/18/38/curry-1786353_1280.jpg" width="70%" class="items-image">
			<h3 class="menu-name">
				<a href="curry.php">CURRY
			</h3></a>
			<div class="icon-pepper">
				<img src="https://cdn.pixabay.com/photo/2020/08/25/18/39/pepper-5517792_1280.png" width="20px">
				<img src="https://cdn.pixabay.com/photo/2020/08/25/18/39/pepper-5517792_1280.png" width="20px">
				<img src="https://cdn.pixabay.com/photo/2020/08/25/18/39/pepper-5517792_1280.png" width="20px">
			</div>
			<p>￥972（税込）</p>
			<input type="text" placeholder=0 name="curry" style="width: 100px">
			<span>個</span>
		</div>
		<div class="menu-item-pasta">
			<img src="https://cdn.pixabay.com/photo/2015/04/08/13/13/pasta-712664_1280.jpg" width="70%">
			<h3 class="menu-name">
				<a href="pasta.php">PASTA
			</h3></a>
			<div class="icon-pepper">
				<img src="https://cdn.pixabay.com/photo/2020/08/25/18/39/pepper-5517792_1280.png" width="20px">
			</div>
			<P>￥1296（税込）</P>
			<input type="text" placeholder=0 name="pasta" style="width: 100px">
			<span>個</span>

		</div>
	</div>
	<div style="text-align: center;">
		<input type="submit" value="注文する" class="order"><a href="order.php"></a>

	</div>
	</form>
	<div class="map-title" id="access">
		<p>Access</p>
		<h2>店舗へのアクセス</h2>
	</div>
	<div class="google-title">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3323.7419922516356!2d130.42530779999998!3d33.5860476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x354191ba3cd3b965%3A0x6fbcfc907c02ed74!2zVC1NSU5FKOODhuOCo-ODvOODnuOCpOODsynmoKrlvI_kvJrnpL4!5e0!3m2!1sja!2sjp!4v1681626791422!5m2!1sja!2sjp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
		</iframe>
		<div class="address">
			<br>
			<br>
			<p>住所
				<br>
				<br>
				〒810-0013
				<br>
				福岡県福岡市博多区博多駅東3-1-10
				<br>
				<br>
				<br>
				営業時間
				<br>
				<br>
				平日　8:00 - 19:00
				<br>
				土日祝　10:00 - 18:00
			</p>
		</div>
	</div>

	<div class="news-title" id="news">
		<p>News</p>
		<h2>お知らせ</h2>
	</div>

	<div class="shop-style">
		<figure class="image"><img src="https://cdn.pixabay.com/photo/2017/08/07/16/41/reading-2605540_1280.jpg"></figure>
		<div class="shop-detail">
			<p class="date">2022.06.01 <span class="orange">メディア・出演</span></p>
			<p class="int">雑誌「カフェスタイル」に掲載されました。</p>
			<p class="specifics">詳細を見る 〉</p>
		</div>
	</div>
	<div class="shop-style">
		<figure class="image"><img src="https://cdn.pixabay.com/photo/2015/04/08/13/13/pasta-712664_1280.jpg"></figure>
		<div class="shop-detail">
			<p class="date">2022.07.02 <span class="orange">商品情報</span></p>
			<p class="int">新商品「パスタ」のご紹介</p>
			<p class="specifics">詳細を見る 〉</p>
		</div>
	</div>
	<div class="shop-style">
		<figure class="image"><img src="https://cdn.pixabay.com/photo/2020/03/23/03/48/closed-4959355_1280.png"></figure>
		<div class="shop-detail">
			<p class="date">2022.07.14 <span class="orange">休業</span></p>
			<p class="int">自主休業のお知らせ</p>
			<p class="specifics">詳細を見る 〉</p>
		</div>
	</div>

	<footer>
		<div class="footer">
			<div class="footer-box">
				<div class="container-footer">
					<img src="https://cdn.pixabay.com/photo/2022/08/30/07/28/cafe-logo-7420534_1280.png" width="200px" height="200px">
					<div class="menu-list">
						<ul class="footer-menu">
							<li class="con"><a href="#Concept">Concept</a></li>
							<li class="acc"><a href="#access">Access</a></li>
							<li class="men"><a href="#menu">Menu</a></li>
							<li class="new"><a href="#news">News</a></li>
						</ul>
					</div>
				</div>
				<p class="company">&copy; Re-Light Cafe.</p>
			</div>
		</div>
		</div>
	</footer>
	<script>
		const move = document.querySelector('.move');
		const headerNav = document.querySelector('.header-nav');
		const headerNavHeight = headerNav.offsetHeight;

		window.addEventListener('scroll', () => {
			if (window.pageYOffset <= headerNav.offsetTop + headerNavHeight) {
				move.classList.add('hidden');
			} else {
				move.classList.remove('hidden');
			}
		});

		const signinBtn = document.querySelector('.signin');
		const loginTitle = document.getElementById('login-title');

		const toggleLoginTitle = () => {
			if (loginTitle.style.display === 'none') {
				loginTitle.style.display = 'block';
			} else {
				loginTitle.style.display = 'none';
			}
		};

		signinBtn.addEventListener('click', toggleLoginTitle);

		document.addEventListener('click', (event) => {
			const {
				target
			} = event;
			if (
				target !== signinBtn &&
				!signinBtn.contains(target) &&
				target !== loginTitle &&
				!loginTitle.contains(target) &&
				loginTitle.style.display === 'block'
			) {
				loginTitle.style.display = 'none';
			}
		});

		loginTitle.addEventListener('click', (event) => {
			event.stopPropagation();
			if (loginTitle.style.display === 'block') {
				loginTitle.style.display = 'none';
			}
		});

		const loginForm = document.getElementById('login-sub');

		loginForm.addEventListener('click', (event) => {
			event.stopPropagation();
		});
	</script>
</body>

</html>