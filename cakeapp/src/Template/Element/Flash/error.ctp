<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div style="margin: auto; width: 400px" class="alert alert-danger" role="alert" onclick="this.classList.add('hidden');"><?= $message ?></div>
