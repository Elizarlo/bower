<?php
  echo dirname(__FILE__);
  define('ruta_raiz',dirname(__FILE__));
 ?>

<p>
<h1>Testo2</h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
<img src="<?php  echo ruta_raiz . '/img.jpg'; ?>">
<img src="img.jpg">
<img src="/var/www/html/Web/Ejemplos/include/img/img.jpg" alt="">
</p>
