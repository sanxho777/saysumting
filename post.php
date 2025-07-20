<?php
// Log visitor IP + User‑Agent
$log = sprintf(
  "[%s] %s — %s\n",
  date('Y‑m‑d H:i:s'),
  $_SERVER['REMOTE_ADDR'] ?? 'UNKNOWN',
  $_SERVER['HTTP_USER_AGENT'] ?? 'UNKNOWN'
);
file_put_contents(__DIR__.'/ip_log.txt', $log, FILE_APPEND);

// Redirect to the stream page
header('Location: saycheese.html');
exit;
?>
