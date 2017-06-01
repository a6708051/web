<?php
$str = "<h3>this's a test!</h3>";
echo $str;
echo addslashes($str);
echo htmlspecialchars(addslashes($str));
