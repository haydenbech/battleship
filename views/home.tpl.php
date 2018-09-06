<?php
$page_title = 'Home';

ob_start(); // Buffer the following HTML
?>
<h2>Home</h2>
<p>Welcome to Battleship!</p>
<?php
$content = ob_get_clean(); // Save to buffer
