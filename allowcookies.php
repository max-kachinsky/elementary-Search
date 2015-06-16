<?php

if (isset($_COOKIE['allow_cookies']) && $_COOKIE['allow_cookies'] == 1) {
	header('Location: https://elementary.today/start/',TRUE,302);
	die();
}

$Meta = '<title>Разрешить Cookies? &nbsp;&middot;&nbsp; elementary Search</title>';
require 'header.php'; ?>
			<div id="search">
				<div id="search-entry">
					<h2>Хотите ли Вы включить Cookies?</h2>
					<h4>Вы можете изменить своё решение в любое время в меню настроек.</h4>
					<p>Файлы cookie представляют собой небольшие файлы, сохраняемые на Вашем компьютере веб-браузером по требованию сайта, который Вы просматриваете. В данном случае это позволяет сайту запоминать Ваши настройки.</p>
					<h3 class="button"><a href="https://elementary.today/start/">Нет</a></h3>
					<h3 class="button positive"><a href="https://elementary.today/start/enablecookies.php">Да</a></h3>
					<div class="clear"></div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<footer id="footer">
			<a href="https://elementary.today/" title="elementary today"><img class="floatleft faded" src="img/logo.png"></a>
			<nav class="floatright">
				<a href="#settings" class="settings">Настройки</a>
			</nav>
		</footer>
		<?php require 'legal.php'; ?>
		<div class="settings popup">
			<div class="settings close"></div>
			<div class="settings content">
				<h2>Настройки</h2>
				<div class="control advert"></div>
				<h3>Cookies</h3>
				<label class="control cookies checkbox toggle candy" onclick="">
					<input id="view" type="checkbox"<?php if (isset($_COOKIE['allow_cookies']) && $_COOKIE['allow_cookies'] == 1) echo ' checked'; ?>/>
					<p>
						<span class="cookies-enabled">Включить</span>
						<span class="cookies-disabled">Отключить</span>
					</p>
					<a class="slide-button"></a>
				</label>
				<h3><label>Затемнение</label></h3>
				<div class="control darken enabled switch switch-three candy" onclick="" <?php if (!isset($_COOKIE['allow_cookies']) && $_COOKIE['allow_cookies'] != 1) echo ' style="display:none;"'; ?>>
					<input id="never" name="view" type="radio"<?php if (isset($_COOKIE['darken']) && $_COOKIE['darken'] == 'never') echo ' checked'; ?>>
					<label class="darken-never" for="never" onclick="">Никогда</label>
					<input id="hover" name="view" type="radio"<?php if (isset($_COOKIE['darken']) && $_COOKIE['darken'] == 'hover') echo ' checked'; ?><?php if (!isset	($_COOKIE['darken'])) echo ' checked'; ?>>
					<label class="darken-hover" for="hover" onclick="">При наведении</label>
					<input id="always" name="view" type="radio"<?php if (isset($_COOKIE['darken']) && $_COOKIE['darken'] == 'always') echo ' checked'; ?>>
					<label class="darken-always" for="always" onclick="">Всегда</label>
					<span class="slide-button"></span>
				</div>
				<div class="control darken disabled switch switch-three candy" onclick="" <?php if (isset($_COOKIE['allow_cookies']) || $_COOKIE['allow_cookies'] == 1) echo ' style="display:none;"'; ?>>
					<h4>Вы должны включить cookies для изменения настроек.</h4>
				</div>

			</div>
		</div>
	 	<div class="settings background"></div>
	</body>
</html>