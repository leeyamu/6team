<?php
unlink('data/'.$_POST['id']);
header('Location: /buskernotice.php');
?>
