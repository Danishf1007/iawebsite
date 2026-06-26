<?php
$counterFile = __DIR__ . "/counter.txt";

// Create file if not exist
if (!file_exists($counterFile)) {
    file_put_contents($counterFile, "0");
}

// Open with exclusive lock to prevent race conditions
$fp = fopen($counterFile, 'c+');
if (flock($fp, LOCK_EX)) {
    $counter = (int)stream_get_contents($fp);
    $counter++;
    ftruncate($fp, 0);
    rewind($fp);
    fwrite($fp, $counter);
    fflush($fp);
    flock($fp, LOCK_UN);
}
fclose($fp);

echo number_format($counter);
?>
