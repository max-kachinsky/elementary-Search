<?php
$Meta = '<title>elementary start</title>';
require 'header.php';
?>
			<form id="search" action="<?php if (isset($_COOKIE['allow_cookies']) && $_COOKIE['allow_cookies'] == 1 && isset($_COOKIE['default_search'])) {
				if ($_COOKIE['default_search'] == 'Google') {
					echo 'https://www.google.ru/search';
				} elseif ($_COOKIE['default_search'] == 'Bing') {
					echo 'https://www.bing.com/search';
				} else {
					echo 'https://duckduckgo.com/';
				}
			} else {
				echo 'https://www.google.ru/search';
			} ?>" method="get">
				<!--[if lte IE 9]>
					<input type="text" value="Поиск" id="search-entry" name="q" onfocus="javascript: if(this.value == 'Поиск'){ this.value = ''; }" onblur="javascript: if(this.value==''){this.value='Поиск';}" autocomplete="off" autofocus>
				<![endif]-->
				<![if !IE]>
					<input type="text" placeholder="Поиск" id="search-entry" name="q" autocomplete="off" autofocus>
				<![endif]>
				<input type="submit" value="" id="search-button">
				<div class="clear"></div>
			</form>
		</div>
		<footer id="footer">
			<a href="https://elementary.today/" title="elementary today"><img class="floatleft faded" src="img/logo.png"></a>
			<span class="current-search">В данный момент Вы используете <?php if (isset($_COOKIE['allow_cookies']) && $_COOKIE['allow_cookies'] == 1 && isset($_COOKIE['default_search'])) {
				if ($_COOKIE['default_search'] == 'Google') {
					echo 'Google';
				} elseif ($_COOKIE['default_search'] == 'Bing') {
					echo 'Bing';
				} else {
					echo 'DuckDuckGo';
				}
			} else {
				echo 'Google';
			} ?>.</span> &nbsp;&middot;&nbsp;
			<?php
			if (isset($_COOKIE['allow_cookies']) && $_COOKIE['allow_cookies'] == 1) {
				echo '
			<ul>
				<li><a class="change-search" href="#change-search">Изменить</a>
					<ul>
						<li><a class="change-to-google" href="#change-to-google">Google</a></li>
						<li><a class="change-to-bing" href="#change-to-bing">Bing</a></li>
						<li><a class="change-to-duckduckgo" href="#change-to-duckduckgo">DuckDuckGo</a></li>
					</ul>
				</li>
			</ul>';
			} else {
				echo '<a class="change-search" href="https://elementary.today/start/allowcookies.php">Изменить</a>';
			}
			?>
			<nav class="floatright">
				<a href="#settings" class="settings">Настройки</a>
			</nav>
		</footer>
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
				<div class="control darken disabled switch switch-three candy" onclick="" <?php if (isset($_COOKIE['allow_cookies']) && $_COOKIE['allow_cookies'] == 1) echo ' style="display:none;"'; ?>>
					<h4>Вы должны включить cookies для изменения настроек.</h4>
				</div>

			</div>
		</div>
	 	<div class="settings background"></div>
	</body>
</html>
