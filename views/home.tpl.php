<?php
$page_title = 'Home';

ob_start(); // Buffer the following HTML
?>
<h2>Home</h2>
<p>Welcome to Battleship!</p>

<h3>Game Grid</h3>
<p>This is my first attempt to create a playable grid.</p>
<table class="battle-grid">
    <tr>
        <th></th>
        <?php for( $col = 'A'; $col <= 'J'; $col++ ): ?>
        <th><?= $col ?></th>
        <?php endfor; ?>
    </tr>
    <?php for( $row = 0; $row <= 10; $row++ ): ?>
    <tr>
        <th><?= $row ?></th>
        <?php for( $col = 'A'; $col <= 'J'; $col++): ?>
        <td id="grid-<?= $col.$row ?>"></td>
        <?php endfor ?>
    </tr>
    <?php endfor; ?>
</table>
<?php
$content = ob_get_clean(); // Save to buffer
