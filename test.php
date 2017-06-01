<?php
function utf8_unicode($name){
    //$name = iconv('UTF-8', 'UCS-2//IGNORE', $name);
    $name = mb_convert_encoding($name, 'UCS-2', 'UTF-8');
    var_dump($name);
    $len  = strlen($name);
    $str  = '';
    for ($i = 0; $i < $len - 1; $i = $i + 2){
        $c  = $name[$i];
        $c2 = $name[$i + 1];
        echo $c.':::'.ord($c).'-------'.$c2.':::'.ord($c2);
        echo "<br />";
        if (ord($c) > 0){   //两个字节的文字
            echo 'c:'.$c.'==='.ord($c).'==='.base_convert(ord($c), 10, 16).'===';
            echo "<br />";
            echo 'c2:'.$c2.'==='.ord($c2).'==='.base_convert(ord($c2), 10, 16).'==='.str_pad(base_convert(ord($c2), 10, 16), 2, 0, STR_PAD_LEFT);
            echo "<br />";
            echo '\u'.base_convert(ord($c), 10, 16).str_pad(base_convert(ord($c2), 10, 16), 2, 0, STR_PAD_LEFT);
            echo "<hr />";
            //存在php版本问题
            $str .= '\u'.base_convert(ord($c), 10, 16).str_pad(base_convert(ord($c2), 10, 16), 2, 0, STR_PAD_LEFT);
            //$str .= '\u'.str_pad(base_convert(ord($c2), 10, 16), 2, 0, STR_PAD_LEFT).str_pad(base_convert(ord($c), 10, 16),2, 0,STR_PAD_LEFT);
            //$str .= base_convert(ord($c), 10, 16).str_pad(base_convert(ord($c2), 10, 16), 2, 0, STR_PAD_LEFT);
        } else {
            $str .= '\u'.str_pad(base_convert(ord($c2), 10, 16), 4, 0, STR_PAD_LEFT);
            //$str .= str_pad(base_convert(ord($c2), 10, 16), 4, 0, STR_PAD_LEFT);
        }
    }
    $str = strtolower($str);//转换为小写
    return $str;
}
var_dump(utf8_unicode('123131转换为小写'));
exit;
