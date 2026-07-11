<?php
$css = file('resources/css/data-siswa.css');
$modal_css = implode('', array_slice($css, 630, 161));
file_put_contents('resources/css/dashboard.css', "\n" . $modal_css, FILE_APPEND);
echo "Done";
