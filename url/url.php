<?php
$url = 'http://www.baidu.com';

print_r(get_headers($url));

print_r(get_headers($url, 1));
?>