<?php if (isset($_COOKIE['allow_cookies']) && $_COOKIE['allow_cookies'] == 1) {
	header('Location: https://elementary.today/start/',TRUE,302);
	exit();
} 
setcookie('allow_cookies', '1', time()+2419200, '/start', '.elementary.today');
header('Location: https://elementary.today/start/',TRUE,302);
exit();
?>
