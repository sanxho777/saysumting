<?php
// Save each POSTed JPEG frame into ./frames/YYYYMMDD_HHMMSS_millis.jpg
if ($_SERVER['REQUEST_METHOD']==='POST') {
    $data     = file_get_contents('php://input');
    $folder   = __DIR__ . '/frames';
    if (!is_dir($folder)) mkdir($folder, 0755, true);
    $name     = date('Ymd_His_') . round(microtime(true)*1000) . '.jpg';
    file_put_contents("$folder/$name", $data);
}
?>
