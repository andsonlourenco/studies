<?php
$nome = 'campo';
?>
<input type="text" name="<?php echo addslashes($nome); ?>" />
<input type="text" name="<?php echo htmlentities($nome); ?>" />