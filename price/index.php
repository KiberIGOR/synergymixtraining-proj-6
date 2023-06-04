<?php
$partner = isset($_GET['partner']) ? trim($_GET['partner']) : '';
$BASE_HREF = '//' . $_SERVER['HTTP_HOST'] . (!empty($_SERVER['DOCUMENT_URI']) ? str_replace(substr(str_replace('index.php', '', $_SERVER['DOCUMENT_URI']), 1), '', $_SERVER['REQUEST_URI']) : '');
$version = isset($_GET['version']) ? trim($_GET['version']) : '';
$ROOT = $_SERVER['DOCUMENT_ROOT'] . '/';
include_once $ROOT . 'version.php';
?>
<!DOCTYPE html>
<html>

<head>
    <?php if (!empty($_SERVER['DOCUMENT_URI'])) : ?>
        <base href="//<?= $_SERVER['HTTP_HOST'] . str_replace(substr($_SERVER['DOCUMENT_URI'], 1, -9), '', $_SERVER['REQUEST_URI']) ?>">
    <?php else : ?>
        <base href="//<?= $_SERVER['HTTP_HOST'] ?>">
    <?php endif; ?>

    <meta charset="utf-8">
    <title><?= $title ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:title" content="Synergy Mix Training | Тренинг нового поколения">
    <meta property="og:description" content="Тренинг нового поколения">
    <meta property="og:url" content="//<?= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>">

    <link href="https://synergy.ru/img/favicon.ico" type="image/x-icon" rel="icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" rel="stylesheet">
    <link rel="stylesheet" href="libs/hamburgers/hamburgers.css">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv-printshiv.min.js"></script><![endif]-->
    <!--[if lte IE 9]><script src="http://phpbbex.com/oldies/oldies.js" charset="utf-8"></script><![endif]-->
    <!--[if lt IE 9]><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script><![endif]-->
    <!--[if gte IE 9]><!-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!--<![endif]-->

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-xxxxxx');
    </script>
    <!-- End Google Tag Manager -->

</head>

<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-xxxxxx" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    
    
    
    <div class="wrapper">
        

<section class="header " id="header">
	<div class="container">
		<div class="header__content">


			<div class="header__logo">
				<img class="header__logo-1" src="img/header/logo.svg" alt="logo">
				<?php /* ?>	<img class="header__logo-2" src="img/header/logo.svg" alt="logo"><?php */ ?>
			</div>

			<button id="hamburger" class="hamb hamburger hamburger--collapse-r" type="button">
				<span class="hamburger-box"><span class="hamburger-inner"></span></span>
			</button>

			<nav class="header__nav" id="nav">

				<div class="header__logo-mobile">
					<img src="img/header/logo.svg" alt="logo">
				</div>

				<a class="header__nav-item scroll" href="#about">МИКС-&nbsp;ТРЕНИНГ</a>
				<a class="header__nav-item scroll" href="#price">АБОНЕМЕНТЫ</a>
				<a class="header__nav-item scroll" href="#timetable">РАСПИСАНИЕ</a>
				<?php /* ?><a class="header__nav-item scroll" href="#tour">ТУРЫ</a><?php */ ?>
				<?php /* ?>	<a class="header__nav-item scroll" href="#community">КОМЬЮНИТИ</a><?php */ ?>
				<a class="header__nav-item scroll" href="#contacts">КОНТАКТЫ</a>
				<a href="#popup-reg" data-fancybox class="header__nav-item _button ">&nbsp;ОСТАВИТЬ&nbsp;ЗАЯВКУ&nbsp;</a>

				<div class="header__social">
					<a class="header__social-inst scroll" href="https://instagram.com/synergymixtraining?utm_medium=copy_link"><img src="img/header/inst.svg" alt=""></a>
					<?php /* ?><a class="header__social-vk scroll" href=""><img src="img/header/vk.svg" alt=""></a>
					<a class="header__social-fb scroll" href=""><img src="img/header/fb.svg" alt=""></a><?php */ ?>
				</div>
			</nav>

		</div>
	</div>
</section>
<section class="thanks">
  <div class="container">
    <div class="thanks__inner">
      <img src="img/thanks/submit.png" alt="" class="thanks__img">
      <div class="thanks__title">Спасибо!</div>
      <div class="thanks__subtitle">Ваша заявка отправлена.</div>
      <div class="thanks__text">
        В ближайшее время специалист свяжется с вами и ответит на Ваши вопросы.
      </div>
      <a class="thanks__button" href="<?= $BASE_HREF ?>">На главную</a>
    </div>
  </div>
</section>
<section class="footer">
	<div class="container">

		<div class="footer__content">
			<div class="footer__logo"><img src="img/footer/logo_syn.svg" alt="" class="footer__img"></div>
			<?php /* ?>
			<div class="footer__synDigital">
				Разработано и&nbsp;продвигается&nbsp;&mdash;
				<a href="https://sydi.ru/" target="_blank">Synergy&nbsp;Digital</a>
			</div> <?php */ ?>
			<a href="#popup-reg" data-fancybox class="footer__button ">&nbsp;ОСТАВИТЬ&nbsp;ЗАЯВКУ&nbsp;</a>
			<div class="footer__privacyPolicy">
				<p class="footer__text">&copy;&nbsp;1988&nbsp;&mdash; 2020 Университет &laquo;Синергия&raquo;. Все права защищены.</p>
				<a class="fancybox-privacy-link footer__developer-link" href="https://synergy.ru/lp/_chunk/privacy.php?date=28-04-2017&amp;lang=ru">Политика конфиденциальности</a>
			</div>

		</div>

	</div>
</section>

    </div>

    <div hidden>
        

        <div class="popup popup-reg" id="popup-reg">
    
<form action="<?= $action ?>&form=popup-reg" class="form vertical">
    <div class="form__wrapper">
        
        <h3 class="form__title ">Оставьте заявку<br> на пробную тренировку</h3>
        

        

        <div class="form__items">
            
            
<div class="form__item form__item_text ">
    
    <input name="name" type="text" placeholder="Имя" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_text ">
    
    <input name="phone" type="text" placeholder="Телефон" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_email ">
    
    <input name="email" type="email" placeholder="E-mail" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            

            <div class="form__more">
                <label class="form__footer ">
                    <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
                        <div class="form__footer-checkbox-icon lazy"></div>
                    </div>
                    <!-- <div class="form__footer-text">Согласен c&nbsp;<a href="#privacy" class="fancybox form__more-link">политикой конфиденциальности </a> и&nbsp;на&nbsp;получение рассылок от&nbsp;Synergy Master Class и&nbsp;Школы Бизнеса &laquo;Синергия&raquo;</div> -->
                    <div class="form__footer-text">Согласен на обработку персональных данных, получение рассылок, а также c <a href="#privacy" class="fancybox form__more-link">политикой конфиденциальности </a></div>
                </label>
            </div>

            <div class="form__item form__item_button"><button class="form__button button" type="submit">ПОПРОБОВАТЬ БЕСПЛАТНО</button></div>
        </div><!-- form__items -->


    </div>
</form>

</div>

        

        <a href="//sydi.ru/"></a>
    </div>

    <!-- Плагины и хелперы -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="libs/hamburgers/hamburgers.js"></script>

    <!-- Скрипт ALM Lander -->
    <script src="https://syn.su/js/lander.js" defer></script>
    <script src="js/script.js"></script>

</body>

</html>