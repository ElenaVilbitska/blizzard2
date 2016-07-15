<header id="header">
<div class="row">
	<div class="col-3 logo">
		<a href="/index.php"><img src="/images/blizzard_logo.png" alt=""></a>
	</div>
	<div class="col-9">
		<nav id="menu">
		<ul class="manu-main">	
			<li><a class="<?=(basename($_SERVER["PHP_SELF"]) == 'index.php' ? 'active' : 'normal')?>" href="/index.php">Главная</a></li>
			<li><a class="<?=(basename($_SERVER["PHP_SELF"]) == 'games.php' ? 'active' : 'normal')?>" href="/games.php">Игры</a></li>		
			<li><a class="<?=(basename($_SERVER["PHP_SELF"]) == 'films.php' ? 'active' : 'normal')?>" href="/films.php">Фильмы</a></li>	
			<li><a class="<?=(basename($_SERVER["PHP_SELF"]) == 'contacts.php' ? 'active' : 'normal')?>" href="/contacts.php">Контакты</a></li>		
			<li><a class="<?=(basename($_SERVER["PHP_SELF"]) == 'subscription.php' ? 'active' : 'normal')?>" href="/subscription.php">Подписка</a></li>
		</ul>
	 	</nav>
	</div>
</div>
<?php
$url = $_SERVER["REQUEST_URI"]; 
if ($url == "/index.php" || $url == "/"){ ?>
	<div class="headerimgs">
		<div class="headerdivimgs">
			<h2>О Blizzard Entertainment</h2>
			<p><span>Blizzard Entertainment®</span> — мировой лидер в сфере производства компьютерных игр. Компания была основана в 1994 г. и быстро снискала широкую популярность во всем мире.</p>
			
			<p class="tablet-none">Наш приоритет — создание красивых, проработанных до мелочей и увлекательных игр. Именно поэтому Blizzard с момента создания пользуется репутацией компании, которой дороже всего качество.</p>
		</div>
	</div>
<?php }?>


</header>
<main>
