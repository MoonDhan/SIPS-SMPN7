<?php
$files = glob('database/seeders/Siswa*.php');
$count = 0;
foreach($files as $f) {
    $content = file_get_contents($f);
    if(strpos($content, "'kelas' =>") !== false) {
        // Remove the line containing 'kelas' =>
        $content = preg_replace("/\s*'kelas'\s*=>\s*'[A-Z0-9]+',/", "", $content);
        file_put_contents($f, $content);
        $count++;
    }
}
echo "Fixed $count files.";
