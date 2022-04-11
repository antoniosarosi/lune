<?php if (app()->env("dev")): ?>
<pre>
<?= $e->getMessage() ?>
<br>
<?= $e->getTraceAsString() ?>
</pre>
<?php else: ?>
HTTP 500 INTERNAL SERVER ERROR
<?php endif ?>
