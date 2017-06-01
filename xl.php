<?php
echo microtime(true);
$str = '123313中文转化';
for ($i=0; $i<10000000; $i++) {
    mb_convert_encoding($str, 'UCS-2', 'UTF-8');
}
echo PHP_EOL;
echo microtime(true);
