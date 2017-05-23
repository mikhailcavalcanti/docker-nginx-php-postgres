<?php
$db = new PDO('pgsql:host=postgres;dbname=postgres;user=postgres;password=abcd1234');
echo '<pre>' . print_r(array('a' => 'b'), true) . '</pre>';
phpinfo();
?>